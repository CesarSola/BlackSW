<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposensor extends Model
{
    use HasFactory;
    protected $table = 'tipos_sensores';
    public $timestamps = false;

    public function sensores()
    {
        return $this->hasMany(Sensores::class, 'tipo_sensor_id');
    }
}

