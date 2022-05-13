<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class t_user extends Model implements Authenticatable
{
    use BasicAuthenticatable;
    protected $table = 't_user';
    protected $fillable = [
        'useLogin',
        'usePassword',
        'useAdministrator',
    ];

    public function getAuthPassword()
    {
        return $this->usePassword;
    }
    use HasFactory;
}
