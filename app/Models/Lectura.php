<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lectura extends Model
{
    protected $table = 'lecturas_sensores';
public $timestamps = false;
public function Sensor()
{
    return $this->belongsTo(Sensores::class, 'sensor_id');
}

}
