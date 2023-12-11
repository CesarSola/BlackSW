<?php

namespace App\Http\Controllers;

use App\Models\Lectura;
use App\Models\Sensores;
use Illuminate\Http\Request;

class LecturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturas = Lectura::all();
        $sensores= Sensores::all();
        return view('Lecturas.index', compact('lecturas', 'sensores'));
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
        $lecturas = new Lectura();
        $lecturas->fecha_inicio= $request->input('fecha_inicio');
        $lecturas->hora_lectura= $request->input('hora_lectura');
        $lecturas->valor= $request->input('valor');
        $lecturas->sensor_id= $request->input('sensor_id');
        $lecturas->save();
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $lecturas = Lectura::find($id);
        $lecturas->fecha_inicio= $request->input('fecha_inicio');
        $lecturas->hora_lectura= $request->input('hora_lectura');
        $lecturas->valor= $request->input('valor');
        $lecturas->sensor_id= $request->input('sensor_id');
        $lecturas->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lecturas = Lectura::find($id);
        $lecturas->delete();
        return redirect()->back();
    }
}
