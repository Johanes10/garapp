<?php

namespace App\Http\Controllers;

use App\Models\ServiceProduct;
use Illuminate\Http\Request;

class ServiceProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('serviceproducts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'price'=>'required|numeric|max:255',
            'category'=>'required|string|max:255',
        ]);

        $serviceProduct= new ServiceProduct();
        $serviceProduct->create($validated);
        return redirect(route('serviceproducts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceProduct $serviceProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceProduct $serviceProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceProduct $serviceProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceProduct $serviceProduct)
    {
        //
    }
}
