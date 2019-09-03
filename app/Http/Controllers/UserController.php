<?php

namespace App\Http\Controllers;

use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function useradd(){
        $arr=[
            "u_name"=>"zhangsan",
            "u_email"=>"zhangsan@qq.com",
            "u_pwd"=>"123123",
            "c_time"=>time(),
            "u_time"=>time(),
        ];
        $uid=UserModel::insertGetId($arr);
        if($uid){
            echo $uid;exit;
        }
    }

    public function testRedis(){
        $key="username";
        $value=Redis::get($key);
        if(!$value){
            Redis::set($key,"zhangsan");
            Redis::expire($key,10);
            $value=Redis::get($key);
        }
        var_dump($value);
    }
}
