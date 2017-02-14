<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use App\User;
class LoginController extends Controller{

/**
 * 登陆
 * @return [type] [description]
 */
    public function login(){
        return view('login.login');
    }


/**
 *
 *注册
 * 
 */

   public function regist(){

     return view('login.regist');
   }


  /**
   *    
   * 退出登录
   */
     public function login_out(){
      return view('login.login');
    }

  }

  ?>
