<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cama extends Model
{
    use HasFactory;
    protected $table = 'camas';
    public $timestamps=false;
    public function Invernadero():BelongsTo
    {
        return $this->belongsTo(Invernadero::class, 'invernadero_id');
    }

   
}