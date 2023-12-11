<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sensores;
use App\Models\Tiposensor;
use App\Models\Estado;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensores=Sensores::all();
        $tipos = Tiposensor::all();
        $estado = Estado::all();
        return view('Sensor.sensor',compact('sensores','tipos','estado'));

//return view('Sensor.sensor');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Sensor.registrarSensor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sensores = new Sensores;
        $sensores->nombre = $request->input('nombre');
        $sensores->numero_serie = $request->input('numero_serie');
        $sensores->modelo = $request->input('modelo');
        $sensores->descripcion = $request->input('descripcion');
        $sensores->topic = $request->input('topic');
        $sensores->tipo_sensor_id = $request->input('tipo_sensor_id');
        $sensores->estado_id= $request->input('estado_id');
        $sensores->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sensores=Sensores::all();
        return view('Sensor.show',compact('sensores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sensores = Sensores::find($id);
        return view('Sensor.editarSensor',['sensores' => $sensores]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sensores = Sensores::find($id);
        $sensores->nombre = $request->input('nombre');
        $sensores->numero_serie = $request->input('numero_serie');
        $sensores->modelo = $request->input('modelo');
        $sensores->descripcion = $request->input('descripcion');
        $sensores->topic = $request->input('topic');
        $sensores->tipo_sensor_id = $request->input('tipo_sensor_id');
        $sensores->estado_id = $request->input('estado_id');
        $sensores->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sensores = Sensores::find($id);
        $sensores->delete();
        return redirect()->back();
    }
}
