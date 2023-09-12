<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Sellings extends Model
{
    protected $table = 'sellings';

    protected $fillable = [
        'quantity',
        'payment_method',
        'customer_name',
        'obs',
        'created_at',
        'updated_at'
    ];
}
