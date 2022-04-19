<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Work;
use Validator;
use DB;
use File;
class WorkController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = '')
    {
        if($id > 0)
        {
            $arr = DB::table('works')->where(['id'=>$id])->get();
            $result['title'] = $arr[0]->title;
            $result['image'] = $arr[0]->image;
            $result['id'] = $arr[0]->id;
        }else{
            $result['title'] = '';
            $result['image'] = '';
            $result['id'] = '';
        }

       $result['works'] = DB::table('works')->latest()->get();
        return view('backend/work/add-work',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->post('id') > 0) {
            $validImag = 'mimes:jpeg,png,jpg,webp';
        }else{
            $validImag = 'required|mimes:jpeg,png,jpg,webp';
        }

        $request->validate([
            'image'=> $validImag
        ]);

        if ($request->post('id') > 0) {
            $model = Work::find($request->post('id'));
            $msg = 'work update successfully';
        }else{
            $model = new Work();
            $msg = 'Work Added successfully';
        }

        if ($request->hasFile('image')) {
            // delete stored file
            if ($request->post('id') > 0) {
                $storedFilePath = $model->image;
                if (File::exists($storedFilePath)) {
                    File::delete($storedFilePath);
                }
            }

            // create image name
            $image = $request->file('image');
            $imgExt = $image->extension();
            $rand = time().rand(111111111,999999999);
            $imgName = 'work'.$rand.'.'.$imgExt;
            $image->move('uploads/Work/',$imgName);

            // store image
            $model->image = 'uploads/Work/'. $imgName;
        }
        $model->title = $request->input('title');
        $model->save();

        if ($model->save()) {
            return redirect()->route('work')->with('success',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Work::find($id);
        $delService = DB::table('works')->where(['id'=>$id])->delete();

        if ($delService) {
                $storedFilePath = $model->image;
                // print_r($storedFilePath);die();
                if (File::exists($storedFilePath)) 
                {

                    File::delete($storedFilePath);

                }

            }

        if ($delService) {
            return redirect()->route('work')->with('danger','Work Deleted ');
        }
    }

}
