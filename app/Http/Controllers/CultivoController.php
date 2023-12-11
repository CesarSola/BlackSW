<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use App\Models\Tipo;
use Illuminate\Http\Request;

class CultivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultivos = Cultivo::all();
        $tipos = Tipo::all();
        return view('Cultivo.index', compact('cultivos', 'tipos'));
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
        $cultivos = new Cultivo;
        $cultivos->nombre= $request->input('nombre');
        $cultivos->descripcion= $request->input('descripcion');
        $cultivos->min_humedad= $request->input('min_humedad');
        $cultivos->max_humedad= $request->input('max_humedad');
        $cultivos->min_luminosidad= $request->input('min_luminosidad');
        $cultivos->max_luminosidad= $request->input('max_luminosidad');
        $cultivos->min_temperatura= $request->input('min_temperatura');
        $cultivos->max_temperatura= $request->input('max_temperatura');
        $cultivos->tiempo_crecimiento= $request->input('tiempo_crecimiento');
        $cultivos->tiempo_vida= $request->input('tiempo_vida');
        $cultivos->tipo_sembrado= $request->input('tipo_sembrado');
        $cultivos->imagen= $request->input('imagen');
        $cultivos->tipo_cultivo_id= $request->input('tipo_cultivo_id');
        $cultivos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cultivo $cultivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cultivos =  Cultivo::find($id);
        $cultivos->nombre= $request->input('nombre');
        $cultivos->descripcion= $request->input('descripcion');
        $cultivos->min_humedad= $request->input('min_humedad');
        $cultivos->max_humedad= $request->input('max_humedad');
        $cultivos->min_luminosidad= $request->input('min_luminosidad');
        $cultivos->max_luminosidad= $request->input('max_luminosidad');
        $cultivos->min_temperatura= $request->input('min_temperatura');
        $cultivos->max_temperatura= $request->input('max_temperatura');
        $cultivos->tiempo_crecimiento= $request->input('tiempo_crecimiento');
        $cultivos->tiempo_vida= $request->input('tiempo_vida');
        $cultivos->tipo_sembrado= $request->input('tipo_sembrado');
        $cultivos->imagen= $request->input('imagen');
        $cultivos->tipo_cultivo_id= $request->input('tipo_cultivo_id');
        $cultivos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cultivos =  Cultivo::find($id);
        $cultivos->delete();
        return redirect()->back();
    }
}
