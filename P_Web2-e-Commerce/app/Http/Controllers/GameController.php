<?php

namespace App\Http\Controllers;

use App\Models\t_article;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\DB;
use App\Models\t_author;
use App\Models\t_category;
use App\Models\t_have;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Database\Eloquent\Model;

class GameController extends Controller
{
    public function getAuthors(){
        $authors = t_author::all();
        $games = t_article::all();
        $category = t_category::all();
        return view('pages/addGame')->with('authors', $authors)->with('games', $games)->with('categories', $category);
    }

    public function addGame(Request $request){
        $article = new t_article();
 
        $article->artName = $request->artName;
        $article->artDescription = $request->artDescription;
        $article->artPathToImage = $request->artPathToImage;
        $article->artPrice = $request->artPrice;
        $article->artRealeseDate = $request->artReleaseDate;
        $article->FKAuthor = $request->artFKAuthor;
 
        $article->save();

        $have = new t_have();
        $have->FKArticle = $article->idArticle;
        $have->FKCategory = $request->idCategory;
        $have->save();
    }

    public function deleteGame(int $idGame){
        $game = t_article::find($idGame);
        $game->delete();
    }

    public function updateGame (int $idGame = 1, $arrayUpdate = array("artName" => "MineCampf", "artDescription" => "Campf Hitler", "artPathToImage" => "D:\\")){
        t_article::where("idArticle", $idGame)->update($arrayUpdate);
    }
}

class Author extends Controller
{
    public function selectIdAndName (){
        t_article::all(['idAuthor, autCompanyName']);
    }
}