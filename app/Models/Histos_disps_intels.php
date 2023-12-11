<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Histos_disps_intels extends Model
{
    use HasFactory;
    protected $table='histos_disps_intels';
    public $timestamps=false;

    public function dispositivos()
    {
        return $this->belongsTo(Dispositivo::class, 'disp_intel_id');
    }
  
}
