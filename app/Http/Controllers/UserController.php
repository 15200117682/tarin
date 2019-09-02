<?php

namespace App\Http\Controllers;

use App\Model\UserModel;
use Illuminate\Http\Request;

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
}
