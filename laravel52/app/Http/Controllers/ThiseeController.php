<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use App\User;
use App\Cur;
class ThiseeController extends Controller
{

    public function thisee(){
        $data=DB::table('study_seeding')->join('study_seeding', 'study_seeding.teacher_id', '=', 'study_seeding.teacher_id')->get();
        return view('thisee.thisee',['data'=>$data]);
    }


}



 


