<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLikes extends Model
{
    use HasFactory;
    // protected $table = 'Followers';
    protected $primaryKey = 'post_likes_id';

    protected $fillable = [
        'customer_id',
        'post_id',
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
