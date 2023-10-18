<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $primaryKey='book_id'; //ez a primaryKey egy alapértelmezett változó, így tudom módosítani

    protected $fillable = [ //ide kerülnek a kitölthető mezők
        'author',
        'title',
        'pieces',
    ];
}
