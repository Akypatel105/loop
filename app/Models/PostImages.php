<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImages extends Model
{
    use HasFactory;
    protected $primaryKey = 'post_image_id';

    protected $fillable = [
        'post_id',
        'customer_id',
        'post_image',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
