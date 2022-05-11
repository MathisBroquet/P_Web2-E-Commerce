<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_order extends Model
{
    protected $table = 't_order';
    protected $fillable = [
        'ordPrice',
        'ordDate',
        'FKBasket',
        'FKUser',
    ];
    use HasFactory;
}
