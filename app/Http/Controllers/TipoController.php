<?php

namespace App\Http\Controllers;
use App\Models\Cultivo;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = Tipo::all(); 
        return view('Tipo.index', compact('tipos'));
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
        $tipos = new Tipo;
        $tipos->tipo=$request->input('tipo');
        $tipos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo $tipo)
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
          $tipos =  Tipo::find($id);
        $tipos->tipo=$request->input('tipo');
        $tipos->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipos =  Tipo::find($id);
        $tipos->delete();
        return redirect()->back();
        //
    }
}
