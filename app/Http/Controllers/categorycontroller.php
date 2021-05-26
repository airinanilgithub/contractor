<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\categorymodel;
class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        
        $categorys=categorymodel::all();
return view('projectcategory',compact('categorys'));
    
        

    }

    
   
    public function categorynav()
    {
        $categorys=categorymodel::all();
        return view('usertheme',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projectcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getcid=request('cid');
        $getcname=request('cname');
     
     
     $category=new categorymodel();
     $category->cid=$getcid;
     $category->cname=$getcname;
    
     $category->save();
     return redirect('/categorys');
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
    $categorys=categorymodel::find($id);
        return view('categoryeditview',compact('categorys'));
    }
    public function deleteview($id)
    {
        $categorys=categorymodel::find($id);
        return view('categorydeleteview',compact('categorys'));


    }
    public function destroy($id)
    {
        $category=categorymodel::find($id);

        $category->delete();

        return redirect('/categorys');
    }
 

    public function update(Request $request, $id)
    {
        $category=categorymodel::find($id);
        $getcid=request('cid');
        $getcname=request('cname');
      

       
     
     $category->cid=$getcid;
     $category->cname=$getcname;
    
     $category->save();
        

       
  

        return redirect('/categorys');

    }

}
