<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::orderBy('id', 'desc')->get();
        return view('vehicles.listar', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.ss
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
        'brand'=>'string|max:255',
        'model'=>'string|max:255',
        'year'=>'string|max:255',
        'number_plate'=>'string|max:6',
        'type'=>'string|max:255',
    ]);
    $vehicle= new Vehicle();
    $vehicle->create($validated);

    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
