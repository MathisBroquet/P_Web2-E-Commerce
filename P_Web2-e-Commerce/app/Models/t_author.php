<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_author extends Model
{
    protected $table = 't_author';
    protected $fillable = [
        'autCompanyName',
        'autMail',
        'autCountry',
    ];
    use HasFactory;
}
