<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $table = 'cultivos';
    public $timestamps = false;

    public function Tipo(){
        return $this->belongsTo(Tipo::class, 'tipo_cultivo_id');
    }

}
