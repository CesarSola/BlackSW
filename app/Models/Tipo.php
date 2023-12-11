<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos_cultivos';
    public $timestamps = false;

    public function cultivos(){
        return $this->hasMany(Cultivo::class,'tipo_cultivo_id', 'id');
    }
    
}
