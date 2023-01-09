<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $guarded = [];

    public function User() {
        return $this->belongsTo(User::class, 'user_id' ,'id','id' );
    }

    public function Post() {
        return $this->belongsTo(Post::class, 'post_id' ,'id','id' );
    }
}
