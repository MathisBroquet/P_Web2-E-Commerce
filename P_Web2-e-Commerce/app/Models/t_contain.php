<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_contain extends Model
{
    protected $table = 't_contain';
    protected $fillable = [
        'FKArticle',
    ];
    use HasFactory;
}
