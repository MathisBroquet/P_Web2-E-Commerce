<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_author extends Model
{
    protected $table = 't_author';
    protected $primaryKey = 'idAuthor';
    protected $fillable = [
        'idAuthor',
        'autCompanyName',
        'autMail',
        'autCountry',
    ];
    use HasFactory;


    public function t_article(){
        return $this->hasMany(t_article::class);
    }
}
