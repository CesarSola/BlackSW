<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dispositivo;

class Tipodispositivo extends Model
{
    use HasFactory;
    protected $table = 'tipos_disps_intels';
    public $timestamp = false;

    public function dispositivos(){
        return $this->hasMany(Dispositivo::class, 'tipo_disp_intel_id', 'id');
    }
}

