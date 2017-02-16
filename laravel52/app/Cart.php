<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
   
    protected $table = 'study_cart';   //定义表名
    protected $primaryKey = 'cart_id';  //定义被查询的ID
	public $timestamps = false;

	/**
	 * 根据用户查询购物车信息返回用户数据
	 */
	public function user_cart($nickname)
	{ 
        $userInfo = DB::table('study_user')->where('nickname', '=',$nickname)->first();
        $cartInfo = $this->where('user_id',$userInfo['user_id'])->get()->toArray();
        return $cartInfo;
	}
}
