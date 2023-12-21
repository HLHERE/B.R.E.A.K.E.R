<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory , Sluggable;

    // ini adalah yang tidak boleh di isi oleh user
    protected $guarded = ['id', 'views'];
    // protected $with = ['author', 'category'];
    protected $with = ['author'];

    /* 
     *Logic tentang satu postingan punya satu author
    */
    public function category(){
        return $this->belongsTo(Category::class);

    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
            'source' => 'title'
            ]
        ];
    }
}
