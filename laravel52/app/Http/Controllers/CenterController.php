<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use App\User;
class CenterController extends Controller{

/**
 * 个人中心
 * @return [type] [description]
 */
    public function center(){
        return view('center.center');
    }



 /**
  *
  * 资料
  */
 
    public function myinfo(){

    	return view('myinfo.myinfo');
    }

 
    
   



}


