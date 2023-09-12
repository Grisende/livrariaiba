<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $table = 'purchases';

    protected $fillable = [
        'title',
        'book_id',
        'quantity',
        'store',
        'payment_method',
        'status',
        'order',
        'created_at',
        'updated_at'
    ];
}
