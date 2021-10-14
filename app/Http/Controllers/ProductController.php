<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
//use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();
        return view("product.index",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $p=Category::all();
        $c=Catalogue::all();

        return view("product.add",compact('p'),compact('c'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product= Product::create([
           // $validated = $request->validated(),
$request->validate([
   'name'=>'required',
    'description'=>'required',
    'price'=>'required',
    'stock'=>'required',
]),
        'name'=> $request->name,
            'description'=> $request->description,
            'price'=> $request->price,
            'stock'=> $request->stock,
            'category_id'=>$request->category_id

        ]) ;
       $product->catalogues()->attach($request->cats);
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $p=Product::findOrFail($id);

        return view("product.edit",compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        Product::where('id', $id)->update($request->all());

        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $p=Product::findOrFail($id);
        $p->delete();
        return redirect()->route('product');
    }


    public function details($id)
    {
        //
        $p=Product::findOrFail($id);
        return view('product.details',compact('p'));
    }
}


