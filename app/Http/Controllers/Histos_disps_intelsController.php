<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use App\Models\Histos_disps_intels;
use Illuminate\Http\Request;

class Histos_disps_intelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historiales = histos_disps_intels::all();
        $dispositivos = Dispositivo::all();
        return view('Histos_disps_intels.index', compact('historiales', 'dispositivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Histos_disps_intels.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $historiales = new Histos_disps_intels();
        $historiales->fecha_inicio = $request->input('fecha_inicio');
        $historiales->hora = $request->input('hora');
        $historiales->valor = $request->input('valor');
        $historiales->disp_intel_id = $request->input('disp_intel_id');
        $historiales->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Histos_disps_intels $historiales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
       

        $historiales = Histos_disps_intels::find($id);
        $historiales->fecha_inicio = $request->input('fecha_inicio');
        $historiales->hora = $request->input('hora');
        $historiales->valor = $request->input('valor');
        $historiales->disp_intel_id = $request->input('disp_intel_id');
        $historiales->save();
        $historiales->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $historiales = histos_disps_intels::find($id);
        $historiales->delete();

        return redirect("Histos_disps_intels");
    }
}
