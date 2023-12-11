<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CamaSensor extends Model
{
    use HasFactory;
    protected $table = 'camas_sensores';
    public function  cama(){
        return $this->belongsTo(Cama::class,'cama_id','id');
    }
    public function sensor(){
      return $this->belongsTo(Sensores::class,'sensor_id','id');
    }
}
