<?php

namespace App\Models;
Use App\Models\Cama;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Invernadero extends Model
{
    use HasFactory;
    protected $table= 'invernaderos';
    
    public function camas():HasMany
    {
        return $this->hasMany(Cama::class,'invernadero_id');
    }

    public $timestamps=false;

}