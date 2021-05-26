<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminregistermodel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;
class adminregistercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('adminregister');
    }
    public function createlogin()
    {

        return view('adminlogin');
    }
    public function adminhome()
    {

        return view('adminhome');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'adname' => 'required',
            'adphone' => 'required|digits:10|unique:App\Models\adminregistermodel,adphone',
            
            'admailid' => 'required',
            'adusername' => 'required',
            'adpassword' => 'required|min:5'
        ]);




     $getadname=request('adname');
     $getadphone=request('adphone');
     
     $getadmailid=request('admailid');
     $getadusername=request('adusername');
     $getadpassword=request('adpassword');
     
     $adregister=new adminregistermodel();
     $adregister->adname=$getadname;
     $adregister->adphone=$getadphone;
     
     $adregister->admailid=$getadmailid;
     $adregister->adusername=$getadusername;
     $adregister->adpassword=Hash::make($request->adpassword);
     $adregister->save();
     return redirect('/adminlogin');
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
        //
    }
    public function adminlogout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('adminlogin');
        }
        else
        {
            return redirect('adminlogin');
        }

    }

    public function adminhomeuser(){
        $adregisters=adminregistermodel::all();
        $data=['LoggedUserinfo'=>adminregistermodel::where('id','=',session('loggeduser'))->first()];
        return view('adminhome',compact('adregisters'),$data);

    }


    public function check(Request $request)
    {

        $userInfo =adminregistermodel::where('adusername','=',$request->adusername)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->adpassword , $userInfo->adpassword))
            {
                $request-> session()->put('loggeduser', $userInfo->adusername);
           
                return redirect('/adminhome');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
   }
 }


}
