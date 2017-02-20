<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Session;
class LoginController extends Controller{

/**
 * 登陆
 * @return [type] [description]
 */
    public function login(){
        $session = new Session;
        $code = $session->get('tel');
        if(!empty($code)){
            return redirect('/');
            die;
        }
        return view('login.login');
    }
    /**
     * 验证唯一性
     */
    public function Only()
    {
        $tel = Input::get('tel');
        $user = DB::table('study_user')->where('user_tel', '=',$tel)->get();
        if($user){
            return 1;
        }else{
            return 0;
        }
    }
    /**
     * 登录
     */
    public function Checklogin()
    {   //echo Crypt::encrypt('k123456');die;
        $tel = Input::get('tel');
        $pwd = Input::get('pwd');
        if(empty($tel) || empty($pwd)){
            return back()->with('errors','不能为空！');
        }
        $arr = DB::table('study_user')->where('user_tel',$tel)->first();
        if($arr){
            if($pwd !=Crypt::decrypt($arr->user_pwd)){
                return back()->with('errors','密码错误!');
            }else{
                $session = new Session;
                $session->set('tel',$tel);
                return redirect('/');
            }
        }else{
            return back()->with('errors','账号不存在!');
        }

    }
    /**
     * qq登录
     */
    public function Qqlogin()
    {
        $token = Input::get();
        echo $token;
    }
    /**
     * f发送短信验证
     */
    public function Short()
    {
        $tel = Input::get('tel');
        $number = rand(1000,9999);
        $session = new Session;
        $session->set('short',$number);
        $param = "code%3D".$number;
        $nowapi_parm['app']='sms.send';
        $nowapi_parm['param']=$param;
        $nowapi_parm['tempid']=50895;
        $nowapi_parm['phone']=$tel;
        $nowapi_parm['appkey']=20892;
        $nowapi_parm['sign']='28feb41149334bcdb2d02918f618d98d';
        $nowapi_parm['format']='json';
        $result=$this->nowapi_call($nowapi_parm);
        if($result['status'] == 'OK'){
            return 1;
        }
    }
    /**
     * 验证码对比
     */
    public function Contrast(Request $request)
    {
        $user_code = Input::get('code');
        $session = new Session;
        $code = $session->get('short');
        if($user_code == $code) {
            return 1;
        }else{
            return 0;
        }
    }
    /**
     * 注册入库
     */
    public function Add()
    {
        $request = Input::get();
        $pwd = Crypt::encrypt($request['pwd']);
        $tel = $request['tel'];
        $addtime = date("Y-m-d h:i:s");
        $user=array(
            'user_tel'=>"$tel",
            'user_pwd'=>"$pwd",
            'addtime'=>"$addtime",
        );
        $re = DB::table('study_user')->insert($user);
    }
    /**
     * 短信
     */
    function nowapi_call($a_parm){
        if(!is_array($a_parm)){
            return false;
        }
        //combinations
        $a_parm['format']=empty($a_parm['format'])?'json':$a_parm['format'];
        $apiurl=empty($a_parm['apiurl'])?'http://api.k780.com:88/?':$a_parm['apiurl'].'/?';
        unset($a_parm['apiurl']);
        foreach($a_parm as $k=>$v){
            $apiurl.=$k.'='.$v.'&';
        }
        $apiurl=substr($apiurl,0,-1);
        if(!$callapi=file_get_contents($apiurl)){
            return false;
        }
        //format
        if($a_parm['format']=='base64'){
            $a_cdata=unserialize(base64_decode($callapi));
        }elseif($a_parm['format']=='json'){
            if(!$a_cdata=json_decode($callapi,true)){
                return false;
            }
        }else{
            return false;
        }
        //array
        if($a_cdata['success']!='1'){
            echo $a_cdata['msgid'].' '.$a_cdata['msg'];
            return false;
        }
        return $a_cdata['result'];
    }
/**
 *
 *注册
 * 
 */

   public function regist(){

     return view('login.regist');
   }


  /**
   *    
   * 退出登录
   */
     public function login_out(){

       return view('login.login');
    }

  }

  ?>
