<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class SellingsOld extends Model
{
    protected $table = 'sellings_old';

    protected $fillable = [
        'book_id',
        'title',
        'selling_price',
        'quantity',
        'payment_method',
        'customer_name',
        'obs',
        'created_at',
        'updated_at'
    ];
}
