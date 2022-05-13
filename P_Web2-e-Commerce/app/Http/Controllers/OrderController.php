<?php

namespace App\Http\Controllers;

use App\Models\t_article;
use App\Models\t_basket;
use App\Models\t_contain;
use App\Models\t_order;

class OrderController extends Controller
{
    
    public function GetGamesFromBasket($idBasket){
        
        $basket = t_basket::where('idBasket', $idBasket)->get();

        $contain = t_contain::where("FKBasket", $basket)->get();

        return t_article::where("idArticle", $contain["FKArticle"])->get();

    }


    public function GetAllOrderFromSpecificUser($idUser = 1){
        $orders = t_order::where('FKUser', $idUser)->get();
        dd($orders);

        foreach($orders as $key => $value){
            foreach($key as $key2 => $value){
                $orders += $this->GetGamesFromBasket($key2['FKBasket']);
            }
            
        }
        
        
        return view('pages/games', ['order' => $orders]);
    }
}
