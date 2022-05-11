<?php

namespace App\Http\Controllers;

use App\Models\t_article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function getAllArticles(){
        $games = DB::table('t_article')
        ->join('t_have','t_article.idArticle','=', 't_have.FKArticle')
        ->join('t_category','t_have.FKCategory','=','t_category.idCategory')->get();
        dd($games);
        
        return view('pages/games', ['article' => $games]);
    } 

    public function getOneGame($idGame){
        /*where('artName', "Minecraft")->get(["idArticle", "artName", "artDescription", "artPathToImage", "artPrice", "artRealeseDate", "FKAuthor"]);*/

        /*
        $game = DB::table('t_article')
        ->join('t_have','t_article.idArticle','=', 't_have.FKArticle')
        ->join('t_category','t_have.FKCategory','=','t_category.idCategory')
        ->select('t_article.*', 't_have*', 't_category.*')
        ->where('idArticle', 1)->get();
        */
        
        $game = t_article::where('idArticle', $idGame)->first();
        dd($game->category);
        
        return view('pages/games', ['article' => $game]);
    }

    public function addGame(){
       
    }

    public function deleteGame(int $idGame){

    }

    public function updateGame (int $idGame){

    } 
}
