<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cultivo_cama extends Model
{
    use HasFactory;
 
    protected $table = 'cultivos_camas';
  
    public function cama():BelongsTo
    {
        return $this->belongsTo(Cama::class, 'cama_id');
    }
    public function cultivo():BelongsTo
    {
        return $this->belongsTo(Cultivo::class, 'cultivo_id');
    }
    public $timestamps=false;


}
