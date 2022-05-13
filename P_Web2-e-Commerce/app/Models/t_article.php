<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_article extends Model
{
    protected $table = 't_article';
    protected $fillable = [
        'artName',
        'artDescription',
        'artPathToImage',
        'artReleaseDate',
        'artFKAuthor',
    ];
    use HasFactory;

    public function t_contain(){
        return $this->belongsToMany(t_basket::class, 't_contain', 'idArticle', 'idBasket');
    }

    public function t_have(){
        return $this->belongsToMany(t_category::class, 't_have', 'idCategory', 'idArticle');
    }

    public function t_user(){
        return $this->belongsTo(t_author::class, 'idAuthor', 'autCompanyName');
    }

}
