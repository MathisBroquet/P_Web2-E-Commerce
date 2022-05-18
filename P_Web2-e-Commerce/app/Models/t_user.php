<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_user extends Model
{
    protected $table = 't_user';
    protected $primaryKey = 'idUser';
    protected $fillable = [
        'idUser',
        'useLogin',
        'usePassword',
        'useAdministrator',
    ];
    use HasFactory;

    

    public function t_session(){
        return $this->hasOne('App\t_session');
    }

    public function t_order(){
        return $this->hasMany('App\t_order');
    }
}
