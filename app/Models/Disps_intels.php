<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Disps_intels extends Model
{
    use HasFactory;
    protected $table ='disps_intels';
    protected $primarykey= 'id';
    public function historiales():HasMany 
    {
        return $this->hasMany(Histos_disps_intels::class, 'disp_intel_id');
    }
    public $timestamps=false;
}
