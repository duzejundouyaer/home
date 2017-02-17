<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Cur extends Model
{
    //
    protected $table='study_cur';
    protected $primaryKey='cur_id';
    public $timestamps=false;
    protected $guarded=[];

    public function searchCurType($id){
        return DB::table($this->table)->where('typeid',$id)->join('study_teacher', 'study_cur.teacher_id', '=','study_teacher.teacher_id')->select('study_cur.cur_id','study_cur.cur_name','study_cur.cur_img','study_cur.cur_price','study_teacher.teacher_id','study_teacher.teacher_name')->get();//->orderBy('cur_id','desc')->paginate(1);
    }
}
