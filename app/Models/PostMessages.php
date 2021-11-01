<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMessages extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_msg_id';

    protected $fillable = [
        'post_id',
        'customer_id',
        'receiver_id',
        'post_message',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
