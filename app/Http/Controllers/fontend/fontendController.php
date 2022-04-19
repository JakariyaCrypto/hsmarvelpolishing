<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Validator;
class fontendController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['services'] = DB::table('services')->latest()->limit(10)->get();
        return view('fontend/index',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        $result['services'] = DB::table('services')->latest()->get();
        return view('fontend/service',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function work()
    {
        $result['works'] = DB::table('works')->latest()->get();
        return view('fontend/work',$result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('fontend/contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('fontend/about');
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
    public function storeContact(Request $request)
    {
        $valid = validator::make($request->all(),[
            'name'=>'required|max:50',
            'mobile'=>'numeric',
        ]);

        if(!$valid->passes()){
            return response()->json([
                'status'=>'errors',
                'errors'=>$valid->errors()->toArray(),
            ]);
        }else{
            $contactInfo = [
                'name' => $request->post('name'),
                'mobile' => $request->post('mobile'),
                'message' => $request->post('message'),
            ];

            if ($contactInfo) {
                DB::table('contacts')->insert($contactInfo);
                return response()->json([
                    'status'=>'success','msg'=>'Contact Information Submitted'
                ]);
            }
        }

    }
}
