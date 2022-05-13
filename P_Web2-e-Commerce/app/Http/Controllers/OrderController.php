<?php

namespace App\Http\Controllers;

use App\Models\t_article;
use App\Models\t_basket;
use App\Models\t_contain;
use App\Models\t_order;

class OrderController extends Controller
{
    
    public function GetGamesFromBasket($idBasket){       
        $articles = t_contain::where('FKBasket', $idBasket)->get();
       
        /*foreach($articles as $key){
            foreach($key as $key2 => $value){
                if($value == "FKArticle"){
                    //$articles = t_article::where("idArticle", $value)->get();                   
                }               
            }
        }*/
  
    }


    public function GetAllOrderFromSpecificUser($idUser = 1){
        $orders = t_order::where('FKUser', $idUser)->get();        

        foreach($orders as $key){
            foreach($key as $key2 => $value){
                if($value == "FKBasket"){
                
                    $orders = $this->GetGamesFromBasket($value);
                }
            }           
                
            
        }
             
        //dd($orders);
        return view('pages/games', ['order' => $orders]);
    }
}
