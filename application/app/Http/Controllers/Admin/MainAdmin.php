<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class MainAdmin extends Controller
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
        $products=Product::paginate(20);
       return view('admin.product.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
        'productType'=>'required',
        'file'=>'required'

        ]);

    
    if ($request->hasFile('file')) {
        foreach ($request->file as $file) {
        $fileName=$file->getClientOriginalName();
        $file->storeAs('public/products',$fileName);

        $products= new Product;
        $products->productType=$request->productType;
        $products->productImg=$fileName;
        session()->flash('message','Record Saved Successfully!');
        $products->save();
        }
       

        }

        
        return redirect('admin/product');
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
        $editProducts=Product::find($id);
        return view('admin.product.edit', compact('editProducts'));
    }

    /**
     * Update the specified resource ien storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'productType'=>'required',
        'file'=>'required'

        ]);

    
    if ($request->hasFile('file')) {
        foreach ($request->file as $file) {
        $fileName=$file->getClientOriginalName();
        $file->storeAs('public/products',$fileName);

        $products=Product::find($id);
        $products->productType=$request->productType;
        $products->productImg=$fileName;
        session()->flash('message','Record Updated Successfully!');
        $products->save();
        }
       

        }


   
    return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        if (file_exists(imagePath().'products/'.$data->productImg)) { 
            unlink(imagePath().'products/'.$data->productImg);
        }
        $delete=Product::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
