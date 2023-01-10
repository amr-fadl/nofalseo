<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory , SoftDeletes;

    public $guarded = [];

    public function User() {
        return $this->belongsTo(User::class, 'user_id' ,'id','id' );
    }

    public function Comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

}
