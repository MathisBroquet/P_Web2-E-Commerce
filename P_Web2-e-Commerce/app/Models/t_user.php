<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_user extends Model
{
    protected $table = 't_user';
    protected $fillable = [
        'useLogin',
        'usePassword',
        'useAdministrator',
    ];
    use HasFactory;
}
