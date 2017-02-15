<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use App\User;
class WelcomeController extends Controller{

/**
 * 首页
 * @return [type] [description]
 */
    public function welcome(){
        return view('welcome.welcome');
    }


    
   



}


