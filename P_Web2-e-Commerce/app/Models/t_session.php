<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_session extends Model
{
    protected $table = 't_session';
    protected $fillable = [
        'FKUser',
    ];
    use HasFactory;
}
