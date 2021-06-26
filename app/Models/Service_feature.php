<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service_feature extends Model
{
    use HasFactory;
    public function icones()
    {
        return $this->hasMany(Icone::class,'icone_id');
    }
}
