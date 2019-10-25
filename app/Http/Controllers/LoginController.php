<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use App\Crmuser;
class LoginController extends Controller
{
    /**
     * 注册视图
     */
    public function register(){
        return view('login/register');
    }

    /**
     *  执行注册
     */
    public function registerdo(){
         $data=request()->except('_token');
         //验证
         $validator = Validator::make(request()->all(), [
            'user_name' => 'required|alpha_dash|unique:crmuser|min:2|max:12',
            'user_pwd' => 'required|alpha_dash|min:6|max:12',
            'user_pwd1'=>'same:user_pwd',
         ],
         [
            'user_name.required'=>'用户名不能为空',
            'user_name.alpha_dash'=>'管理员名称可以为中文、数字、字母、下划线',
            'user_name.unique'=>'用户名已存在',
            'user_pwd.required'=>'密码不能为空',
            'user_pwd1.same'=>'确认密码需和密码一致',
         ]
        );
            if ($validator->fails()) {
            return redirect('login/register')
            ->withErrors($validator)
           ->withInput();
            }
        $data['user_pwd']=md5($data['user_pwd']);
        $res=Crmuser::create($data);

        // dd($res);
        return redirect('login/login');
    }
    /**
     * 登录视图
     */
    public function login(){
        return view('login/login');
    }

    /**
     * 执行登录
     */
    public function logindo(){

    }

}
