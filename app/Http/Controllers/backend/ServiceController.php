<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Service;
use Validator;
use File;
use DB;
class ServiceController extends Controller
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
        if($id>0){
            $arr = Service::where(['id'=>$id])->get();
            $result['title'] = $arr['0']->title;
            $result['image'] = $arr['0']->image;

            $result['id'] = $arr['0']->id;

        }else{
            $result['title'] = '';
            $result['image'] = '';
            $result['id'] = 0;
        }

        $result['services'] = DB::table('services')->latest()->get();
        return view('backend/service/add-service',$result);
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
        //imge validation
        if ($request->post('id')>0) {
            $imageValidation = '|mimes:jpeg,jpg,png,webp';
        }else{
             $imageValidation = 'required|mimes:jpeg,jpg,png,webp';
        }

        // dd($request->all());
        $request->validate([
            'title'=>'required',
            'image'=> $imageValidation,
        ]);

        if ($request->post('id')>0) {

            $id    = $request->post('id');
            $model = Service::find($id);
            $msg   = "Service Updated Successfull !";
            
        }else{

            $model = new Service();
            $msg   = "Service Insert Successfull !";
        }


        if ($request->hasFile('image')) {
            if ($request->post('id')>0) {
                $storedFilePath = $model->image;
                // print_r($storedFilePath);die();
                if (File::exists($storedFilePath)) 
                {

                    File::delete($storedFilePath);

                }

            }

             // file extention
            $image = $request->file('image');
            $imgExt = $image->extension();
            $rand   = rand(1111111111,999999999);
            $imgName = 'Service'.$rand.'.'.$imgExt;
            $image->move('uploads/Service/', $imgName);
             $model->image = 'uploads/Service/'.$imgName;
            // print_r($imgName);die();

        }

        // store database
        $model->title = $request->post('title');
       
        $model->save();

        if ($model->save()) {
            return redirect()->route('service')->with('success',$msg);
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
        $model = Service::find($id);
        $delService = DB::table('services')->where(['id'=>$id])->delete();

        if ($delService) {
                $storedFilePath = $model->image;
                // print_r($storedFilePath);die();
                if (File::exists($storedFilePath)) 
                {

                    File::delete($storedFilePath);

                }

            }

        if ($delService) {
            return redirect()->route('service')->with('danger','Service Deleted ');
        }
    }
}
