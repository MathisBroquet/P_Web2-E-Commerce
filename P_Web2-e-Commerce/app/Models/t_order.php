<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_order extends Model
{
    protected $table = 't_order';
    protected $fillable = [
        'idOrder',
        'ordPrice',
        'ordDate',
        'FKBasket',
        'FKUser',
    ];
    use HasFactory;

    public function t_user(){
        return $this->belongsTo(t_user::class, "FKUser");
    }

    public function t_basket(){
        return $this->belongsTo(t_order::class, "FKBasket");
    }
}
