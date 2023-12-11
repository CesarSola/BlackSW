<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Historialdisp extends Model
{
    use HasFactory;
    protected $table='historial_dispositivo_inteligente';
    protected $primarykey= 'id';
    public function cama():BelongsTo 
    {
        return $this->belongsTo(Cama::class, 'cama_id');
    }
    public $timestamps=false;
}
