<?php

namespace App\Http\Controllers;
use App\Models\Cultivo_cama;
use App\Models\Cama;
use App\Models\Cultivo;
use Illuminate\Http\Request;

class cultivocamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultivos_camas=Cultivo_cama::all();
        $cultivos=Cultivo::all();
        $camas = Cama::all();
        return view('cultivo_cama.index', compact('cultivos_camas', 'camas', 'cultivos'));
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
        $cultivos_camas=new Cultivo_cama;
        $cultivos_camas->fecha_siembra=$request->input('fecha_siembra');
        $cultivos_camas->fecha_cosecha=$request->input('fecha_cosecha');
        $cultivos_camas->ubicacion_cama=$request->input('ubicacion_cama');
        $cultivos_camas->cultivo_id = $request->input('cultivo_id');
        $cultivos_camas->cama_id = $request->input('cama_id');
        $cultivos_camas->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
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

        $cultivos_camas=Cultivo_cama::find($id);
        $cultivos_camas->fecha_siembra=$request->input('fecha_siembra');
        $cultivos_camas->fecha_cosecha=$request->input('fecha_cosecha');
        $cultivos_camas->ubicacion_cama=$request->input('ubicacion_cama');
        $cultivos_camas->cultivo_id = $request->input('cultivo_id');
        $cultivos_camas->cama_id = $request->input('cama_id');
        $cultivos_camas->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
         $cultivos_camas=Cultivo_cama::find($id);
         $cultivos_camas->delete();
         return redirect()->back();
        //
    }
}
