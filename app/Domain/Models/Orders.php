<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'title',
        'quantity',
        'customer_name',
        'status',
        'obs',
        'created_at',
        'updated_at'
    ];
}
