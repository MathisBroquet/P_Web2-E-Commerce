<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_have extends Model
{
    protected $table = 't_have';
    protected $fillable = [
        'FKArticle',
    ];
    use HasFactory;
}
