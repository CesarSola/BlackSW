<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Invernadero;
use App\Models\Cama;

class invernaderoController extends Controller 
{
   
  public function index()
    {
        $invernaderos = Invernadero::all();
        return view('invernadero.index', compact('invernaderos'));
    }
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     * 
     * 
     */
    public function store(Request $request)
    {
       $invernaderos= new Invernadero;
       $invernaderos->nombre=$request->input('nombre');
       $invernaderos->ancho=$request->input('ancho');
       $invernaderos->latitud=$request->input('latitud');
       $invernaderos->alto=$request->input('alto');
       $invernaderos->largo=$request->input('largo');
       $invernaderos->longitud=$request->input('longitud');
       $invernaderos->descripcion=$request->input('descripcion');
       $invernaderos->save();
     
       return redirect()->back();
    }

    public function show($id)
    {
        $invernaderos = Invernadero::all();
        return view('invernadero.show', compact('invernaderos'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
    }

     public function update(Request $request, $id)
    {
        $invernaderos=Invernadero::find($id);
        $invernaderos->nombre=$request->input('nombre');
       $invernaderos->ancho=$request->input('ancho');
       $invernaderos->latitud=$request->input('latitud');
       $invernaderos->alto=$request->input('alto');
       $invernaderos->largo=$request->input('largo');
       $invernaderos->longitud=$request->input('longitud');
       $invernaderos->descripcion=$request->input('descripcion');
    
        $invernaderos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $invernaderos=Invernadero::find($id);
        $invernaderos->delete();
        return redirect()->back();
    }
}