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
    protected $primaryKey = 'idUser';
    protected $fillable = [
        'idUser',
        'useLogin',
        'usePassword',
        'useAdministrator',
    ];

    public function getAuthPassword()
    {
        return $this->usePassword;
    }
    use HasFactory;

    

    public function t_session(){
        return $this->hasOne('App\t_session');
    }

    public function t_order(){
        return $this->hasMany('App\t_order');
    }
}
