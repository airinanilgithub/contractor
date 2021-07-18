<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookingmodel;
use App\Models\registermodel;
use Carbon\Carbon;
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
        $userId=Session::get('loggeduser');
        $booking=bookingmodel::where('bookingmodels.user_id', $userId)
        ->first();
        //return view('booking',compact('booking'));
        return view('booking')->with('booking',$booking);
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
           
           
            'appointmentdate' => 'required'
            
        ]);




       
        $getbookingdate= Carbon::now()->toDateTimeString();
        $getappointmentdate=request('appointmentdate');

        $gettime=request('time');
        if($request->session()->has('loggeduser')){
            
            $booking= new bookingmodel;
            $booking->user_id=$request->session()->get('loggeduser');
            $booking->bookingdate=$getbookingdate;
            $booking->appointmentdate=$getappointmentdate;
          
            $booking->time=$gettime;
            $booking->status="pending";
         
        $save=$booking->save();
        if($save)
        {
            return redirect('/booking')->with('success',"Booked successfully");
        }
        else
        {
            return back()->with('fail',"Not Booked");
        }




        
    }
}
  









    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
