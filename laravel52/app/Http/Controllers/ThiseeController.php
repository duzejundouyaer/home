<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use App\User;
use App\Cur;
class ThiseeController extends Controller
{

    public function thisee(){
        $time=time();
        $cur=new Cur();
        $data=$cur->moBod();
        //print_r($data);die;
        return view('thisee.thisee',['data'=>$data]);
    }
    public function mogbo(){
        $cur=new Cur();
        $data=$cur->moBod();
        return view('thisee.modo',['data'=>$data]);
    }

}



 


