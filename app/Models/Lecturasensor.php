<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturasensor extends Model
{
    use HasFactory;
    protected $table ='lectura_sensor';
    public $timestamps = false;
    
}
