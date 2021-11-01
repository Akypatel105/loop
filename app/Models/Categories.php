<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    // protected $table = 'Followers';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'is_active',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}
