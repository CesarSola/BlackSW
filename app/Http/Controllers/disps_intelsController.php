<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disps_intels;

class Disps_intelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Disps_intels = Disps_intels::all();

       
        return view('Disps_intels.index', ['Disps_intels'=> $Disps_intels]);  //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Disps_intels.create');     //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Disps_intels= new disps_intels();
        $Disps_intels->nombre = $request->input('nombre'); //de la entrada date dame un valor de date (consulta al request)
        //base de datos =   // Vista
        $Disps_intels->modelo = $request->input('modelo'); 
        $Disps_intels->descripcion = $request->input('descripcion');
        $Disps_intels->alcance = $request->input('alcance');
        $Disps_intels->topic = $request->input('topic');
        $Disps_intels->tipo_disp_intel_id = $request->input('tipo_disp_intel_id');
        $Disps_intels->cama_id  = $request->input('cama_id ');
        $Disps_intels->estado_id = $request->input('estado_id ');
       $Disps_intels->save();

       return view('Disps_intels.mensaje', ['msg' => 'Registro guardado']); //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return view('Disps_intels.show'); //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $disps_intels= Disps_intels::find($id);
        return view('Disps_intels.edit', ['disps_intels' => $disps_intels]); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Disps_intels= disps_intels::find($id);
        $Disps_intels->nombre = $request->input('nombre'); //de la entrada date dame un valor de date (consulta al request)
        //base de datos =   // Vista
        $Disps_intels->modelo = $request->input('modelo'); 
        $Disps_intels->descripcion = $request->input('descripcion');
        $Disps_intels->alcance = $request->input('alcance');
        $Disps_intels->topic = $request->input('topic');
        $Disps_intels->tipo_disp_intel_id = $request->input('tipo_disp_intel_id');
        $Disps_intels->cama_id  = $request->input('cama_id ');
        $Disps_intels->estado_id = $request->input('estado_id ');
       $Disps_intels->save();

       return view('Disps_intels.mensaje', ['msg' => 'Registro editado']); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $Disps_intels= disps_intels::find($id);
        $Disps_intels->delete();
        return redirect("Disps_intels"); //
    }
}
