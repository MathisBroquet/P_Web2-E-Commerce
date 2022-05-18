<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_article extends Model
{
    protected $table = 't_article';
    protected $primaryKey = 'idArticle';

    protected $fillable = [
        'idArticle',
        'artName',
        'artDescription',
        'artPathToImage',
        'artReleaseDate',
        'FKAuthor',
    ];
    use HasFactory;

    public function contain(){
        return $this->belongsToMany(t_basket::class, 't_contain', 'idArticle', 'idBasket');
    }

    public function have(){
        return $this->belongsToMany(t_category::class, 't_have', 'idCategory', 'idArticle');
    }

    public function user(){
        return $this->belongsTo(t_author::class, 'FKAuthor');
    }

}
