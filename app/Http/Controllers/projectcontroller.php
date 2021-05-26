<?php

namespace App\Http\Controllers;

use App\Models\projectmodel;
use App\Models\categorymodel;
use App\Models\bookingmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class projectcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function indexnew()
    {
        $projects=projectmodel::all();
        return view('userview',compact('projects'));
    }
    

    public function index()
    {
        $projects=projectmodel::all();
        return view('projectdetailsview',compact('projects'));
    }
    

    
    public function indexnewnew($id)
    {
        $projects=projectmodel::find($id);
        return view('userdetailsview',compact('projects'));
    }
    
    


    public function storeg(Request $request)
    {
        $getcategory= request('cname');
        $category=new categorymodel();
        $category->cname=$getcategory;
        $category->save();
        return view('adminhome');
    }
    public function getAllGenre()
    {
        $bcategory=categorymodel::all();

        return view('projectdetails',compact('bcategory'));

    }



    public function search(Request $request)
    {
        $getptitle=request('ptitle');
        $projects=projectmodel::query()
        ->where('ptitle','LIKE',"%{$getptitle}%")
        ->get();
        return view('userview',compact('projects'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projectdetails');
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getpid=request('pid');
        $getptitle=request('ptitle');
        $getparea=request('parea');
        $getpbedroom=request('pbedroom');
        $getpplace=request('pplace');
        $getpprize=request('pprize');
        $getpcategory=request('pcategory');
        $getpdetails=request('pdetails');
        $getpdetailsnew=request('pdetailsnew');

        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);


        $getpimage1=$request->file('pimage1');
        $name1=$getpimage1->getClientOriginalName();
        $getpimage1->move(public_path('assets/project_img1'),$name1);

        $getpimage2=$request->file('pimage2');
        $name2=$getpimage2->getClientOriginalName();
        $getpimage2->move(public_path('assets/project_img2'),$name2);

        
        $project=new projectmodel();
        $project->pid=$getpid;
        $project->ptitle=$getptitle;
        $project->parea=$getparea;
        $project->pbedroom= $getpbedroom;
        $project->pplace=$getpplace;
        $project->pprize=$getpprize;
        $project->pcategory=$getpcategory;
        $project->pdetails=$getpdetails;
        $project->pdetailsnew= $getpdetailsnew;
        
        
        
        $project->pimage=$name;
        $project->pimage1=$name1;
        $project->pimage2=$name2;

        $project->save();
        return redirect('/viewproject');
        
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
        $projects=projectmodel::find($id);
        return view('editview',compact('projects'));
    }
    public function deleteview($id)
    {
        $projects=projectmodel::find($id);
        return view('deleteview',compact('projects'));


    }
    public function destroy($id)
    {
        $project=projectmodel::find($id);

        $project->delete();

        return redirect('/viewproject');
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
        $project=projectmodel::find($id);
        $getpid=request('pid');
        $getptitle=request('ptitle');
        $getparea=request('parea');
        $getpbedroom=request('pbedroom');
        $getpplace=request('pplace');
        $getpprize=request('pprize');
        $getpcategory=request('pcategory');
        $getpdetails=request('pdetails');
        $getpdetailsnew=request('pdetailsnew');
       
       
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
     $getpimage->move(public_path('assets/project_img'),$name);

     $getpimage1=$request->file('pimage1');
        $name1=$getpimage->getClientOriginalName();
        $getpimage1->move(public_path('assets/project_img1'),$name1);

        $getpimage2=$request->file('pimage2');
        $name2=$getpimage2->getClientOriginalName();
        $getpimage2->move(public_path('assets/project_img2'),$name2);

        $project->pid=$getpid;
        $project->ptitle=$getptitle;
        $project->parea=$getparea;
        $project->pbedroom= $getpbedroom;
        $project->pplace=$getpplace;
        $project->pprize=$getpprize;
        $project->pcategory=$getpcategory;
        $project->pdetails=$getpdetails;
        $project->pdetailsnew= $getpdetailsnew;
        
        $project->pimage=$name;
        $project->pimage1=$name1;
        $project->pimage2=$name2;
        $project->save();
        return redirect('/viewproject');
       
        
    }




    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}