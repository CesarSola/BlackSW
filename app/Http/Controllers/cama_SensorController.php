<?php

namespace App\Http\Controllers;
use App\Models\Cama;
use App\Models\CamaSensor;
use App\Models\Sensores;
use App\Models\Estado;
use Illuminate\Http\Request;


class cama_SensorController extends Controller
{
 
    public function index()
    {
        $cama_sensor =CamaSensor::all();
        $sensores=Sensores::pluck('nombre','id');
        $camas =Cama::pluck('nombre','id');
        
        return view('camaSensor.index', compact('cama_sensor','camas', 'sensores'));
       
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
        $cama_sensor=new CamaSensor;
        $cama_sensor->fecha_instalacion = $request->input('fecha_instalacion');
        $cama_sensor->cama_id=$request->input('cama_id');
        $cama_sensor->sensor_id=$request->input('sensor_id');
        $cama_sensor->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CamaSensor $cama_sensor)
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

        $cama_sensor=CamaSensor::find($id);
        $cama_sensor->fecha_instalacion = $request->input('fecha_instalacion');
        $cama_sensor->cama_id=$request->input('cama_id');
        $cama_sensor->sensor_id=$request->input('sensor_id');
        $cama_sensor->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
         $cama_sensor=CamaSensor::find($id);
         $cama_sensor->delete();
         return redirect()->back();
        //
    }
}
