<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use App\Models\Tipodispositivo;
use Illuminate\Http\Request;

class TipodispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos=Tipodispositivo::all();
        $dispositivo=Dispositivo::all();
        return view ('tipodispositivo.index', compact('tipos','dispositivo'));
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
        $tipos=new Tipodispositivo;
        $tipos->tipo=$request->input('tipo');
        $tipos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipodispositivo $tipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipodispositivo $tipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $tipos=Tipodispositivo::find($id);
      $tipos->tipo=$request->input('tipo');
      $tipos->update();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipos=Tipodispositivo::find($id);
        $tipos->delete();
        return redirect()->back();
    }
}
