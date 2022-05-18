<?php

namespace App\Http\Controllers;

use App\Models\t_article;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\DB;
use App\Models\t_author;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Database\Eloquent\Model;

class GameController extends Controller
{
    public function getAuthors(){
        $authors = t_author::all();
        return view('pages/addGame', ['authors' => $authors]);
    } 
    /*public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->section = $request->input('section');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }*/

    public function displayAddGame() {

        $games = "";//t_article::whereBelongsTo(t_author::class, 'idAuthor', 'autCompanyName');

        return view('pages/addGame', ['games' => $games]);
    }

    public function addGame(Request $request){
        $flight = new t_article;
 
        $flight->artName = $request->artName;
        $flight->artDescription = $request->artDescription;
        $flight->artPathToImage = $request->artPathToImage;
        $flight->artPrice = $request->artPrice;
        $flight->artRealeseDate = $request->artReleaseDate;
        $flight->FKAuthor = $request->artFKAuthor;
 
        $flight->save();
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