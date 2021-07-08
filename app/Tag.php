<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function post() {
        return $this->belongsToMany(Post::class);
    }
}
