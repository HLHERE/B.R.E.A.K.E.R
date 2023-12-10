<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ini adalah yang tidak boleh di isi oleh user
    protected $guarded = ['id', 'views'];
    // protected $with = ['author', 'category'];
    protected $with = ['author'];

    /* 
     *Logic tentang satu postingan punya satu author
    */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
