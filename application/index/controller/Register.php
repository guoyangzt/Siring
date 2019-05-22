<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/9/27
 * Time: 13:53
 */
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Session;

class Register extends Controller{

    /**
     * 验证码验证
     * 陈绪
     * @param Request $request
     * @return
     */
    public function code(Request $request){
        $phone = $request->only(['phone'])['phone'];
        $phone = json_decode($phone,true);
        if(preg_match("/^1[1602]{1}\d{9}$/",$phone)) {
            return ajax_error("手机号码不正确");
        }
        $code = rand(100000, 999999);
        $content = "尊敬的用户您好，本次的验证码为{$code},十内分钟有效";
        $bool = phone("Siring思锐","123qwe",$phone,$content);
        if($bool){
            session("phoneCode",$code);
            ini_set("session.phoneCode",1);
            return ajax_success("发送成功");
        }
    }



    /**
     * 会员注册
     * 陈绪
     */
    public function register(Request $request){
        if($request->isPost()){
           $phoneCode = $request->only(['code'])["code"];
           $code = Session::get("phoneCode");
           if($phoneCode != $code){
               return ajax_error("验证码输入有误");
           }else{
               $passwd = $request->only(["passwd"])["passwd"];
               if(strlen($passwd) < 6 ){
                   return 3;
               }
               $hash = password_hash($passwd,PASSWORD_DEFAULT);
               $user["password"] = $hash;
               $user["phone_num"] = $request->only(["phone"])["phone"];
               $user["invitation"] = $request->only(["invitation"])["invitation"];
               $bool = db("user")->insert($user);
               if($bool){
                   return ajax_success("入库成功");
               }else{
                   return 4;
               }
           }
        }
    }

}