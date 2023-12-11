<?php

namespace App\Http\Controllers;
use App\Models\Cama;
use App\Models\Invernadero;
use Illuminate\Http\Request;

class CamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camas =Cama::all();
        $invernaderos=Invernadero::pluck('nombre','id');
        return view('Cama.index', compact('camas','invernaderos'));
       
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
        $camas=new Cama;
        $camas->nombre=$request->input('nombre');
        $camas->largo=$request->input('largo');
        $camas->ancho=$request->input('ancho');
        $camas->invernadero_id = $request->input('invernadero_id');
        $camas->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cama $Cama)
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

        $camas=Cama::find($id);
        $camas->nombre=$request->input('nombre');
        $camas->largo=$request->input('largo');
        $camas->ancho=$request->input('ancho');
        $camas->invernadero_id = $request->input('invernadero_id');
        $camas->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
         $camas=Cama::find($id);
         $camas->delete();
         return redirect()->back();
        //
    }
}