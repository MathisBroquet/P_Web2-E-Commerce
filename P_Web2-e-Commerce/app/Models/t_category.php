<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_category extends Model
{
    protected $table = 't_category';
    protected $fillable = [
        'catName',
    ];
    use HasFactory;
    //belongto
}
