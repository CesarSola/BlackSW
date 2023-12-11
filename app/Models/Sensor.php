<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    protected $table = 'cama_sensor';
    protected $primarykey='cama_id';
    protected $fillable=['sensor_id','fechaintalacion','estado','id','estado_idEstado'];
    protected $guarded=[];
    public $timestamps=false;
}
