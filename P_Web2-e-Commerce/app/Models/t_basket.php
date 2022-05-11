<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_basket extends Model
{
    protected $table = 't_basket';
    protected $fillable = [
        'basNumberOfGame',
    ];
    use HasFactory;

    public function t_order(){
        return $this->hasOne('App\t_order');
    }
    public function t_contain(){
       return $this->belongsToMany(t_article::class, 't_contain', 'idBasket', 'idArticle');
    }
}
