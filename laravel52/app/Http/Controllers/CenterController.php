<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use DB;
use Mail;
use Symfony\Component\HttpFoundation\Session\Session;
use App\User;
use App\Info;
class CenterController extends Controller{

/**
 * 个人中心
 * @return [type] [description]
 */
    public function center(Request $request){
    	//$request->session()->put('key', '黄文靖');
    	//$value = $request->session()->pull('key', 'default');
        $session = new Session();
        $nickname = $session->get('nickname');
        $arr = DB::table('study_user')->where('nickname',$nickname)->first();
        return view('center.center',['arr'=>$arr]);
    }
    /**
    *
    * 资料
     */
    public function myinfo(Request $request)
    {
        $session = new Session;
        $nickname =  $session->get('nickname');
          if(empty($nickname))
          {
             return redirect('login');
             die;
          }else
          {
            $User = new User();
            $Info = $User->infomation($nickname);
          }
        return view('myinfo.myinfo',['info'=>$Info]);
    }
/**
 * 修改个人资料
 */
   public function updateInfo(Request $request)
   {
     $session = new Session;
     $nickname =  $session->get('username');
          if(!isset($nickname))
          {
             return redirect('login');
          }else{
            $request = $request->all();
            $nickName = $request['nickname'];
            $desc = $request['desc'];
            $user = new User();
            $reg = $user->Update_info($nickname,$nickName,$desc);
            if($reg == 1)
            {
                $session->set('username',$nickName);
              return 0;
            }else
            {
              return 500;
            }
        }
   }
   /**
    * 我的购物车
    */
   public function cart_info(Request $request)
   {
      $session = new Session;
      $nickname = $session->get('nickname');
      if(empty($nickname))
       {
         return redirect('login');
       }else
       {
         $Cart = new Cart();
         $arr = $Cart->user_cart($nickname);
         $price=0;
         foreach ($arr as $key => $value)
         {
            $price+=$value['cur_price'];
         }
         return view('center.cart',['arr'=>$arr,'price'=>$price]);
      }
   }
 
    /**
     * 删除购物车单条数据
     */
    public function delCart(Request $request)
    {
       $request = $request->all();
       $cart_id = $request['id'];
       $cart = new Cart();
       $res = $cart->del_cart($cart_id);
       if($res)
       {
          return 1;
       }
    }
   /**
    * 个人订单列表
    * 高并发的应用场景，处理
    */
   public function order_list()
   {
      $session = new Session;
      $nickname = $session->get('username');
      $order = new Order();
      $orders = $order->orderList($nickname);
      return view('center.orderList',['orders'=>$orders]);
   }
   /**
    * 用户意见反馈界面
    */
   public function user_Feed()
   {
      $session = new Session;
      $nickname = $session->get('username');
      if(!isset($nickname))
      {
         return redirect('login');
      }else
      {
        return view('center.feed');
       }
   }
   /**
    * 用户反馈提交
    */
   public function subFeed(Request $request)
   {
       
        $session = new Session;
        $nickname = $session->get('username');
        $request = $request->all();
        $email = $request['email'];
        $feedBack = $request['feedBack'];
        $Info = new Info();
        $reg = $Info->user_info_feedback($email,$feedBack,$nickname);
        if($reg)
        {
          return 1;
        }
   }


}


