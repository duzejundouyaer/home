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
        return DB::table($this->table)->where('typeid',$id)->get();
    }
}
