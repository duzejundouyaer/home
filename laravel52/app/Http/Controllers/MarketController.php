<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use App\User;
use App\Cur;
class MarketController extends Controller{

/**
 * 全部课程分类
 * @return [type] [description]
 */
    public function market(){
        $types = DB::table('study_type')->where('type_is_show',1)->where('parent_id','=',0)->get();
        //print_r($types);die;
        foreach($types as $key=>$val){
            $val->pp=DB::table('study_type')->where('type_is_show',1)->where('parent_id','=',$val->type_id)->get();
            foreach($val->pp as $k=>$v){
                $v->pp=DB::table('study_type')->where('type_is_show',1)->where('parent_id','=',$v->type_id)->get();
            }
        }
        //print_r($types);die;
        return view('market.market',['types'=>$types]);
    }

    public function curr(){
        $id=Input::get('id');
        //echo $id;
        $cur = new Cur();
        $data=$cur->searchCurType($id);
//        print_r($data);
        return view('market.list',['data'=>$data]);
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



 


