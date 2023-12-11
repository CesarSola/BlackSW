<?php

namespace App\Http\Controllers;
use App\Models\Tipodispositivo;
use App\Models\Cama;
use App\Models\Estado;
use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $dispositivos=Dispositivo::all(); 
      $tipos=Tipodispositivo::all();
      $estados=Estado::all();
      $camas=Cama::all();
      return view('dispositivo.index',compact('dispositivos', 'tipos', 'estados', 'camas'));  
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $dispositivos=new Dispositivo;
     $dispositivos->nombre=$request->input('nombre');
     $dispositivos->modelo=$request->input('modelo');
     $dispositivos->descripcion=$request->input('descripcion');
     $dispositivos->alcance=$request->input('alcance');
     $dispositivos->topic=$request->input('topic');
     $dispositivos->tipo_disp_intel_id=$request->input('tipo_disp_intel_id');
     $dispositivos->cama_id=$request->input('cama_id');
     $dispositivos->estado_id=$request->input('estado_id');
     $dispositivos->save();
     return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Dispositivo $dispositivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispositivo $dispositivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
      $dispositivos=Dispositivo::find($id);
      $dispositivos->nombre=$request->input('nombre');
     $dispositivos->modelo=$request->input('modelo');
     $dispositivos->descripcion=$request->input('descripcion');
     $dispositivos->alcance=$request->input('alcance');
     $dispositivos->topic=$request->input('topic');
     $dispositivos->tipo_disp_intel_id=$request->input('tipo_disp_intel_id');
     $dispositivos->cama_id=$request->input('cama_id');
     $dispositivos->estado_id=$request->input('estado_id');
      $dispositivos->update();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
     $dispositivos=Dispositivo::find($id);
     $dispositivos->delete();
     return redirect()->back(); 
    }
}
