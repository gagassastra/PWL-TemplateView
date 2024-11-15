<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    public $fillable =[
        'title',
        'author',
        'year',
        'city',
        'publisher',
        'cover',
        'bookshelft_id',
    ];
    public function bookshelf() :BelongsTo
    {
        return $this->belongsTo(Bookshelf::class);
    }
}
