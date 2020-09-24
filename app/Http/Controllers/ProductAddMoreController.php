<?php

namespace App\Http\Controllers;

use App\ProductStock; //memanggil model
use Illuminate\Http\Request;

class ProductAddMoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("inputmulti.index");
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
        
        $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.qty' => 'required|integer',
            'addmore.*.price' => 'required|integer',
        ]);
        
        // dd($request->addmore);
        
        foreach ($request->addmore as $key => $value) {
            ProductStock::create($value);
        }
    
        return back()->with('success', 'Record Created Successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function show(ProductStock $productStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductStock $productStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductStock $productStock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductStock $productStock)
    {
        //
    }
}
