<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Tag;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'content', 'description', 'image', 'published_at', 'category_id',
    ];

    /**
     * delete post image
     * @return void
     */
    public function deleteImage(){
        Storage::delete($this->image);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tagId) {
        return in_array($tagId, $this->tag->pluck('id')->toArray());
    }
}
