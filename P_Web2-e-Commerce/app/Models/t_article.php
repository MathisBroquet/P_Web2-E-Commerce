<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_article extends Model
{
    protected $table = 't_article';
    protected $fillable = [
        'artName',
        'artDescription',
        'artPathToImage',
        'artReleaseDate',
        'artFKAuthor',
    ];
    use HasFactory;
}
