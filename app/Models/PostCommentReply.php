<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCommentReply extends Model
{
    use HasFactory;
    protected $table = 'post_comment_reply';

    protected $primaryKey = 'post_comment_reply_id';

    protected $fillable = [
        'post_id',
        'customer_id',
        'post_comment_reply',
        'post_comment_id',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
