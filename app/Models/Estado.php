<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados';
    public $timestamp = false;

    public function dispositivos(){
return $this->hasMany(Dispositivo::class, 'estado_id', 'id');
    }
}
