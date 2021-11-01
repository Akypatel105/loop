<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    use HasFactory;
    // protected $table = 'Followers';
    protected $primaryKey = 'follower_id';

    protected $fillable = [
        'customer_id',
        'followed_customer_id',
        'is_accept',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'customer_id', 'id');
    }

    public function followedCustomers()
    {
        return $this->belongsTo(user::class, 'followed_customer_id', 'id');
    }
}
