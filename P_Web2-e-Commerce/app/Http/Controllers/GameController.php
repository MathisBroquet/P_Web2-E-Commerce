<?php

namespace App\Http\Controllers;

use App\Models\t_article;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getAllGames(){
        $games = t_article::all();
        
        return view('pages/games', ['article' => $games]);
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
    public function addGame(int $idGame){
       
    }

    public function deleteGame(int $idGame){

    }
}
