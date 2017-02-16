<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Cart;
use DB;
use App\User;
class CenterController extends Controller{

/**
 * 个人中心
 * @return [type] [description]
 */
    public function center(Request $request){
    	$request->session()->put('key', '黄文靖');
    	//$value = $request->session()->pull('key', 'default');
        return view('center.center');
    }
  


 /**
  *
  * 资料
  */
 
    public function myinfo(){

    	return view('myinfo.myinfo');
    }
/**
 * 修改个人资料
 */
   public function updateInfo(Request $request)
   {
      $request = $request->all();
      $nickname = $request['nickname'];
      $desc = $request['desc'];
      $user = new User();
      $reg = $user->Update_info($nickname,$desc);
      if($reg)
      {
        return 0;
      }else
      {
        return 500;
      }
   }
   /**
    * 我的购物车
    */
   public function cart_info(Request $request)
   {
      $nickname = $request->session()->get('key');
      if(!isset($nickname))
      {
         return redirect('login');
      }else
      {
         $Cart = new Cart();
         $arr = $Cart->user_cart($nickname);
         return view('center.cart',['arr'=>$arr]);
      }
   }
 
    
   



}


