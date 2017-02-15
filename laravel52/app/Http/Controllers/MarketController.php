<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use App\User;
class MarketController extends Controller{

/**
 * 商品
 * @return [type] [description]
 */
    public function market(){
        return view('market.market');
    }




/**
 * 购物车
 * 
 */

     public function shopcart(){

      return view('shopcart.shopcart');


     }






   }

    ?>



 


