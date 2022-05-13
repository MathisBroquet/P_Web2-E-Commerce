<?php

namespace App\Http\Controllers;

use App\Models\t_article;
use App\Models\t_basket;
use App\Models\t_contain;
use App\Models\t_order;

class OrderController extends Controller
{
    
    public function GetGamesFromBasket($idBasket){       
        $article = t_contain::where('FKArticle', $idBasket)->get();

        foreach($article as $key => $value){
            
        }
    }


    public function GetAllOrderFromSpecificUser($idUser = 1){
        $orders = t_order::where('FKUser', $idUser)->get();        

        foreach($orders as $key => $value){
            foreach($key as $key2 => $value2){               
                if($key2 == "FKBasket"){
                    $this->GetGamesFromBasket($value2);
                }
            }
        }
              
        return view('pages/games', ['order' => $orders]);
    }
}
