<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Models\registermodel;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
    $registers=registermodel::all();
    return view('registerview',compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function contact()
    {
        return view('contact');
    }
    public function loginnew()
    {
        return view('index');
    }

    public function createnew()
    {
        return view('userhome');
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
            'rname' => 'required',
            'rphone' => 'required|digits:10|unique:App\Models\registermodel,rphone',
            'rplace' => 'required',
            'rmailid' => 'required',
            'rusername' => 'required',
            'rpassword' => 'required|min:5'
        ]);




     $getname=request('rname');
     $getphone=request('rphone');
     $getplace=request('rplace');
     $getmailid=request('rmailid');
     $getusername=request('rusername');
     $getpassword=request('rpassword');
     
     $register=new registermodel();
     $register->rname=$getname;
     $register->rphone=$getphone;
     $register->rplace=$getplace;
     $register->rmailid=$getmailid;
     $register->rusername=$getusername;
     $register->rpassword=Hash::make($request->rpassword);

     $register->save();
return redirect('/index');
     

    }
    public function homeuser(){
        $registers=registermodel::all();
        $data=['LoggedUserinfo'=>registermodel::where('id','=',session('loggeduser'))->first()];
        return view('userhome',compact('registers'),$data);

    }




    public function login(Request $request)
    {
     return register::where('rusername',$request->input('rusername'))->get();
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



    public function check(Request $request)
    {

        $userInfo =registermodel::where('rusername','=',$request->rusername)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->rpassword , $userInfo->rpassword))
            {
                $request-> session()->put('loggeduser', $userInfo->rusername);
           
                return redirect('/userhome');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
   }
 }


    public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('index');
        }
        else
        {
            return redirect('index');
        }

    }

}
