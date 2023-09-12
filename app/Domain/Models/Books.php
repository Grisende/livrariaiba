<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'purchase_price',
        'selling_price',
        'quantity',
        'created_at',
        'updated_at'
    ];
}
