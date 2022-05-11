<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_basket extends Model
{
    protected $table = 't_basket';
    protected $fillable = [
        'basNumberOfGame',
    ];
    use HasFactory;
}
