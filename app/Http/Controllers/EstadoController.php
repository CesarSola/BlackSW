<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $estados=Estado::all();
        $dispositivo=Dispositivo::all();
        return view ('estado.index', compact('estados','dispositivo'));
        //
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
       
        $estados=new Estado;
        $estados->estado=$request->input('estado');
        $estados->save();
        return redirect()->back();
         //
    }

    /**
     * Display the specified resource.
     */
    public function show(Estado $estados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $estados=Estado::find($id);
      $estados->estado=$request->input('estado');
      $estados->update();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estados=Estado::find($id);
        $estados->delete();
        return redirect()->back();
    }
}
