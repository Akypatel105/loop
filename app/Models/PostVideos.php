<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostVideos extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_video_id';

    protected $fillable = [
        'post_id',
        'customer_id',
        'post_video',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
