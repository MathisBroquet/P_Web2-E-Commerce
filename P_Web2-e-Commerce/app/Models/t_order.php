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

    public function t_user(){
        return $this->belongsTo('App\t_user');
    }

    public function t_basket(){
        return $this->belongsTo('App\t_order');
    }
}
