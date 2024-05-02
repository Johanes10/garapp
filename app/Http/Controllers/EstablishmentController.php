<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('establishments.index');
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
            'nit'=>'required|integer',
            'name_company'=>'required|string|max:255',
            'address'=>'required|string|max:255',
            'email'=>'required|string|max:255',
        ]);
        $establishments= new Establishment();
        $establishments->create($validated);
        return redirect(route('establishments.index'));
    }
//dd($request->all());
/*$establishments= new Establishment();
$establishments->nit=$request->nit;
$establishments->name_company=$request->name_company;
$establishments->address=$request->address;
$establishments->email=$request->email;
$establishments->save();
return redirect(route('establishments.index'));*/
    /**
     * Display the specified resource.
     */
    public function show(Establishment $establishment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Establishment $establishment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Establishment $establishment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Establishment $establishment)
    {
        //
    }
}
