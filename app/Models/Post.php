<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_id';

    protected $fillable = [
        'customer_id',
        'post_type',
        'post_caption',
        'category_id',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'customer_id', 'id');
    }

    public function postImage()
    {
        return $this->hasMany(postImages::class, 'post_id', 'post_id');
    }

    public function postVideo()
    {
        return $this->hasMany(postVideos::class, 'post_id', 'post_id');
    }

    public function postLikes()
    {
        return $this->hasMany(PostLikes::class, 'post_id', 'post_id');
    }

    public function postComments()
    {
        return $this->hasMany(PostComments::class, 'post_id', 'post_id');
    }
}
