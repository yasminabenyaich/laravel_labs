<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return  $this->belongsToMany(Tag::class, 'post_tag');
    }
    public function categories(){
        return $this->belongsToMany(Categorie::class , 'pivot_table_post_categorie');
    }

}
