<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/9/6
 * Time: 15:59
 */

namespace app\index\controller;
use think\Controller;

class Platform extends Controller{

    /**
     * 多平台介绍
     */
    public function platform(){
       return view("platform_introduction");
    }

}