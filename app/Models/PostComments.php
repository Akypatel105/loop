<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComments extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_comment_id';

    protected $fillable = [
        'post_id',
        'customer_id',
        'post_comment',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
