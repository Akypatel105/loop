<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCommentLike extends Model
{
    use HasFactory;
    // protected $table = 'Followers';
    protected $primaryKey = 'post_comment_like_id';

    protected $fillable = [
        'post_comment_id',
        'post_id',
        'customer_id',
        'is_like',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'customer_id', 'customer_id');
    }

    public function post()
    {
        return $this->belongsTo(post::class, 'post_id', 'post_id');
    }
}
