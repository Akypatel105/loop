<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followings extends Model
{
    use HasFactory;
    // protected $table = 'Followers';
    protected $primaryKey = 'following_id';

    protected $fillable = [
        'customer_id',
        'following_customer_id',
        'is_accept',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'customer_id', 'customer_id');
    }

    public function followingCustomer()
    {
        return $this->belongsTo(user::class, 'following_customer_id', 'id');
    }
}
