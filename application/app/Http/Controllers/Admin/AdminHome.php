<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class AdminHome extends Controller
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

    //     try {
    //     DB::connection()->getPdo();
    //     if(DB::connection()->getDatabaseName()){
    //         echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
    //     }
    // } catch (\Exception $e) {
    //     die("Could not connect to the database.  Please check your configuration.");
    // }

        $sliders=Slider::paginate(20);
        // where('slider','=','slider2')
        //                 ->limit(1)
        //                 ->get();
        // $slider2=Slider::where('slider','=','slider2')
        //                 ->limit(1)
        //                 ->get();
        // $slider3=Slider::where('slider','=','slider3')
        //                 ->limit(1)
        //                 ->get();
        
        return view('admin.home',compact('sliders'));
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
            'slider'=>'required',
            'title'=>'required',
            'subtitle'=>'required',
            'file'=>'required',
            ]);

        if ($request->hasFile('file')) {
            $fileName=$request->file->getClientOriginalName();
            $request->file->storeAs('public',$fileName);

        

        $slider= new Slider;
        $slider->slider=$request->slider;
        $slider->sliderpage=$request->sliderpage;
        $slider->title=$request->title;
        $slider->subtitle=$request->subtitle;
        $slider->sliderimg=$fileName;
        session()->flash('message','Record Saved Successfully!');
        $slider->save();
        }
        return redirect('admin');

       

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editItem=Slider::find($id);
        return view('admin.edit',compact('editItem'));
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
            'slider'=>'required',
            'title'=>'required',
            'subtitle'=>'required',
            'file'=>'required',
            ]);

        if ($request->hasFile('file')) {
            $fileName=$request->file->getClientOriginalName();
            $request->file->storeAs('public',$fileName);

        }

        $slider=Slider::find($id);
        $slider->slider=$request->slider;
        $slider->title=$request->title;
        $slider->subtitle=$request->subtitle;
        $slider->sliderimg=$fileName;
        session()->flash('message','Record Updated Successfully!');
        $slider->save();
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::find($id);
        if (file_exists(imagePath().$data->sliderimg)) { 
            unlink(imagePath().$data->sliderimg);
        }
        $delete=Slider::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
