<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    public $primaryKey='copy_id'; //ez a primaryKey egy alapértelmezett változó, így tudom módosítani

    protected $fillable = [ //ide kerülnek a kitölthető mezők
        'book_id',
        'user_id',
    ];
}
