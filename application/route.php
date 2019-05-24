<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;


/**
 * [前端路由]
 * 
 */
Route::group("",[
    /*首页*/
    "/$"=>"index/index/index",


    /*商品列表*/
    "goods_index"=>"index/Goods/index",
    "goods_detail"=>"index/Goods/detail",
    "goods_id"=>"index/Goods/ajax_id",
    "particulars_id"=>"index/Goods/goods_id",
    "goods_big_images"=>"index/Goods/big_images",



    /*登录页面*/
    "login_index"=>"index/Login/index",
    /*退出登录*/
    "logout"=>"index/Login/logout",
    /*验证码*/
    "login_captcha"=>"index/Login/captchas",



    /*注册页面*/
    "register"=>"index/Register/index",
    "register_code"=>"index/Register/code",
    "register_index"=>"index/Register/register",



    /*安全中心*/
    "security_index"=>"index/Security/index",



    /*模板商城*/
    "template_index"=>"index/Template/index",
    "template_goods_show"=>"index/Template/goods_show",
    "template_goods_buy"=>"index/Template/goods_buy",

    /*多平台介绍*/
    "platform_introduction"=>"index/Platform/platform",
    "about_us"=>"index/Platform/about_us",


    /*定制开发*/
    "exploit_index"=>"index/Exploit/index",



    /*安全中心*/
    "center_index"=>"index/Center/index",
]);

/**
 * [后台路由]
 * 陈绪
 */
Route::group("admin",[
    /*首页*/
    "/$"=>"admin/index/index",

    /* 后台首页 */
    "home_index"=>"admin/Home/index",

    /*登录页面*/
    "index"=>"admin/Login/index",
    "login"=>"admin/Login/login",
    "logout"=>"admin/Login/logout",

    /*验证码*/
    "login_captcha"=>"admin/Login/captchas",

    /*管理员列表*/
    "admin_index"=>"admin/admin/index",
    "admin_add"=>"admin/admin/add",
    "admin_save"=>"admin/admin/save",
    "admin_del"=>"admin/admin/del",
    "admin_edit"=>"admin/admin/edit",
    "admin_updata"=>"admin/admin/updata",
    "admin_status"=>"admin/admin/status",
    "admin_passwd"=>"admin/admin/passwd",


    /*菜单列表*/
    "menu_index"=>"admin/menu/index",
    "menu_add"=>"admin/menu/add",
    "menu_save"=>"admin/menu/save",
    "menu_del"=>"admin/menu/del",
    "menu_edit"=>"admin/menu/edit",
    "menu_updata"=>"admin/menu/updata",
    "menu_status"=>"admin/menu/status",


    /*角色列表*/
    "role_index"=>"admin/role/index",
    "role_add"=>"admin/role/add",
    "role_save"=>"admin/role/save",
    "role_del"=>"admin/role/del",
    "role_edit"=>"admin/role/edit",
    "role_updata"=>"admin/role/updata",
    "role_status"=>"admin/role/status",







    


]);

Route::miss("public/miss");


