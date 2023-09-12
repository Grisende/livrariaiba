<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class BooksSellings extends Model
{
    protected $table = 'sellings';

    protected $fillable = [
        'book_id',
        'selling_id'
    ];
}
