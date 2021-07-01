<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceFeature extends Model
{
    use HasFactory;


    protected $table = "service_features"   ;
      
    public function icones()
    {
        return $this->belongsTo(Icone::class,'icone_id');
    }
}
