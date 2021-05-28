<?php

namespace App\Http\Controllers;
use App\Models\contactmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Validator;
class contactcontroller extends Controller
{
    public function create()
    {
        $contact=contactmodel::all();
        return view('contact',compact('contact'));
    }


    public function index()
    {
        $contacts=contactmodel::all();
        return view('contactview',compact('contacts'));
    }



    public function contact(Request $request)
    {
        $this->validate($request,[
         
           
            'Message' => 'required'
        ]);
        $getdate= Carbon::now()->toDateTimeString();
        $getMessage=request('Message');
        if($request->session()->has('loggeduser')){
            
            $contact= new contactmodel;
            $contact->user=$request->session()->get('loggeduser');
            $contact->date=$getdate;
            $contact->Message=$getMessage;
           $contact->save();
          return redirect('/contact');
        }
        else
        {
          echo "fail";
        }
        
    }






}
