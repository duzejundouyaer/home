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
            $types[$key]['pp']=DB::table('study_type')->where('type_is_show',1)->where('parent_id','=',$val['type_id'])->get();
            foreach($types[$key]['pp'] as $k=>$v){
                $types[$key]['pp'][$k]['pp']=DB::table('study_type')->where('type_is_show',1)->where('parent_id','=',$v['type_id'])->get();
                //print_r($v['type_id']);
            }
            //print_r($types[$key]['pp']);
        }
//        print_r($types);
//        print_r($info);
//        die;
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
    //////详情页
    public function cont(){
        $id=Input::get('cur_id');
        $cur = new Cur();
        $curone=$cur->searchCurone($id);
        $kejie=$cur->curOne($id);
        //print_r($kejie);die;
        return view('market.article',['curone'=>$curone,'kejie'=>$kejie]);
    }
    //播放
    public function bfang(){
        $id=Input::get('fid');
        $cur_id=Input::get('cur_id');
        $cur = new Cur();
        $kejie=$cur->curOne($cur_id);
        $curone=$cur->searchCurone($cur_id);
        $onetv=DB::table('study_chapter')->where('id',$id)->first();
//        print_r($curone);die;
        return view('market.video',['curone'=>$curone,'onetv'=>$onetv,'kejie'=>$kejie]);
    }
    ///加入购物车
     public function shopcart(){
         $id=Input::get("id");

         $info=[
           'status'=>0,
           'msg'=>"加入成功",
         ];
         return $info;
//         return json_encode($info);
//         return view('shopcart.shopcart');
     }

   }

    ?>



 


