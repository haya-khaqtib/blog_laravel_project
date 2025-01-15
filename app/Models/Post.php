<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug','description', 'image_path', 'user_id'];
    public function user()
    {
        ///هذه الخاصية تنتمي ال user class
        return $this->belongsTo(User::class);
    }
}
