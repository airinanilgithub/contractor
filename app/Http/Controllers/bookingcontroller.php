<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookingmodel;
use App\Models\registermodel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
class bookingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=bookingmodel::all();
        return view('bookingview',compact('bookings'));
    }
    public function myorder()
    {
       // $products=pmodel::all();
       $userId=Session::get('loggeduser');
        $bookings= DB::table('bookingmodels')
        
        ->where('bookingmodels.user_id', $userId)
        ->get();
         return view('bookingalert', ['bookings'=>$bookings]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking=bookingmodel::all();
        return view('booking',compact('booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function invoice()
{
    $userId=Session::get('loggeduser');
    $bookings= DB::table('bookingmodels')
    
    ->where('bookingmodels.user_id', $userId)
    ->get();
     return view('report', ['bookings'=>$bookings]);


}
        
          





    public function orderedit($id)
    {
        $booking=bookingmodel::find($id);
        return view('bookingedit',compact('booking'));
    }
    public function updateorder(Request $request, $id)
    {
        $booking=bookingmodel::find($id);


        $getstatus=request('status');

        $booking->status = $getstatus;


        $booking->save();


        return redirect('/bookingview');

    }


        public function projectbooking(Request $request)
    {
        $this->validate($request,[
            'bname' => 'required',
            'bphone' => 'required|digits:10|unique:App\Models\bookingmodel,bphone',
            
            'bmailid' => 'required',
            'bwno' => 'required',
            'bdate' => 'required'
            
        ]);




        $getbname=request('bname');
        $getbphone=request('bphone');
        $getbwno=request('bwno');
        $getbdate=request('bdate');
       
        $getbmailid=request('bmailid');
        $gettime=request('time');
        if($request->session()->has('loggeduser')){
            
            $cart= new bookingmodel;
            $cart->user_id=$request->session()->get('loggeduser');
            $cart->bname=$getbname;
            $cart->bphone=$getbphone;
            $cart->bwno=$getbwno;
            $cart->bdate=$getbdate;
            $cart->bmailid=$getbmailid;
            $cart->time=$gettime;
            $cart->status="pending";
           $cart->save();
         return redirect('/myorders');
        }
        else
        {
          echo "fail";
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
        //
    }
}
