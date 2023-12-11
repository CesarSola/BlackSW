<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensores extends Model
{
    use HasFactory;
    protected $table = 'sensores';
    public $timestamps = false;

    public function tipo()
    { 
           return $this->belongsTo(Tiposensor::class, 'tipo_sensor_id');
    }
    
        public function estado()
        {
            return $this->belongsTo(Estado::class, 'estado_id');
        }
    
}
