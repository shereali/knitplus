<?php

namespace App\Http\Controllers\Admin;

use App\Division;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class DivisionController extends Controller
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
    public function index()
    {   
        $showDivisions=Division::paginate(20);
        return view('admin.division.division', compact('showDivisions'));
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
        $this->validate($request,[
            'divisionType'=>'required'
            ]);
       if (is_array($request->divisionImg) ) {
        if ($request->hasFile('divisionImg') || $request->has('description')) {
          foreach ($request->divisionImg as $file) {
            $filesName=$file->getClientOriginalName();
            $fileName=md5($filesName.time());
            $file->storeAs('public/division',$fileName);
            $description=$request->description; 

            $divisions= new Division;
            $divisions->divisionType=$request->divisionType;
            $divisions->divisionImg=$fileName;
            $divisions->description=$description;
            session()->flash('message','Record Saved Successfully!');
            $divisions->save();

            }  
           
        }
       }
       else{
            $divisions= new Division;
            $divisions->divisionType=$request->divisionType;
            $divisions->description=$request->description;
            session()->flash('message','Record Saved Successfully!');
            $divisions->save();
       }
        

       
      return redirect('admin/division');
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
        $edit_div=Division::find($id);
        return view('admin.division.edit',compact('edit_div'));
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
       $this->validate($request,[
            'divisionType'=>'required'
            ]);
       if (is_array($request->divisionImg) ) {
        if ($request->hasFile('divisionImg') || $request->has('description')) {
          foreach ($request->divisionImg as $file) {
            $filesName=$file->getClientOriginalName();
            $fileName=md5($filesName.time());
            $file->storeAs('public/division',$fileName);
            $description=$request->description; 

            $divisions=Division::find($id);
            $divisions->divisionType=$request->divisionType;
            $divisions->divisionImg=$fileName;
            $divisions->description=$description;
            session()->flash('message','Record Saved Successfully!');
            $divisions->save();

            }  
           
        }
       }
       else{
            $divisions=Division::find($id);
            $divisions->divisionType=$request->divisionType;
            $divisions->description=$request->description;
            session()->flash('message','Record Updated Successfully!');
            $divisions->save();
       }
        

        return redirect('admin/division'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = Division::find($id);
        if (file_exists(imagePath().'division/'.$data->divisionImg)) { 
            unlink(imagePath().'division/'.$data->divisionImg);
        }
        $delete=Division::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
