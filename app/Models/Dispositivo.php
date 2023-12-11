<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipodispositivo;


class Dispositivo extends Model
{
    use HasFactory;
    protected $table='disps_intels';
 
public function tipo(){
    return $this->belongsTo(Tipodispositivo::class, 'tipo_disp_intel_id');
}

public function estados(){
    return $this->belongsTo(Estado::class, 'estado_id');
}
public function camas(){
    return $this->belongsTo(Cama::class, 'cama_id');
}
public $timestamps= false;
}
