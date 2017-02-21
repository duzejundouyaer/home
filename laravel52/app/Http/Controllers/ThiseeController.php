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
        $data=DB::table('study_seeding')->join('study_teacher', 'study_seeding.teacher_id', '=', 'study_seeding.teacher_id')->where('begintime','<',$time)->where('endtime','>',$time)->get();
//        foreach($data as $key=>$val){
//            $data[$key]['begintime']=strtotime($val['begintime']);
//            $data[$key]['endtime']=strtotime($val['endtime']);
//        }
        print_r($data);die;
        //DB::table('study_seeding')->join('study_teacher', 'study_seeding.teacher_id', '=', 'study_seeding.teacher_id')->where()->get();
        return view('thisee.thisee',['data'=>$data]);
    }


}



 


