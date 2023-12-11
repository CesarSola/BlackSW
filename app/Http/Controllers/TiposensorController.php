<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiposensor;
use App\Models\Sensores;

class TiposensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposensor = Tiposensor::all();
        $sensores = Sensores::all();
        return view('tiposensor.index', compact('tiposensor','sensores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiposensor.agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tiposensor= new tiposensor;
        $tiposensor->tipo=$request->input('tipo');
        $tiposensor->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tiposensor = Tiposensor::find($id);
        return view('tiposensor.editar');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $tiposensor= Tiposensor::find($id);
         $tiposensor->tipo=$request->input('tipo');
         $tiposensor->update();
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $tiposensor= tiposensor::find($id);
        $tiposensor->delete();
        return redirect()->back();
    
    }
}
