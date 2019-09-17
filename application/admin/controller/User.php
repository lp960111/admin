<?php


namespace app\admin\controller;

use app\admin\model\User as UserModel;
use think\Request;
use think\Session;
class User extends Base
{
    public function login()
    {
        $this->alreadyLogin();
        return $this->view->fetch();
    }

    public function checkLogin(Request $request)
    {
        $status = 0;
        $result = '';
        $data = $request->param();

        $rule = [
          'name|用户名' => 'require',
           'password|密码' => 'require',
            'captcha|验证码' => 'require|captcha'
        ];

        $msg = [
          'name' => ['require' => '用户名不能为空，请检查'],
          'password' => ['require' => '密码不能为空，请检查'],
            'captcha' => [
                'require' => '验证码不能为空，请检查',
                'captcha' => '验证码错误'
            ],
        ];

        $result = $this->validate($data, $rule, $msg);

        if ($result === true ) {
            $map = [
                'name' => $data['name'],
                'password' => $data['password'],
            ];

            $user = UserModel::get($map);
            if ($user == null) {
                $result = '没有找到用户';
            } else {
                $status = 1;
                $result = '验证通过可以进入[确定]';
                Session::set('user_id',$user->id);
                Session::set('user_info',$user->getData());
            }
        }

        return ['status'=>$status,'message'=>$result,'data'=>$data];
    }

    public function logout()
    {
        Session::delete('user_id');
        Session::delete('user_info');
        $this->success('注销登录，正在返回登陆界面','user/login');
    }

    public function adminList()
    {
        $this->view->count = UserModel::count();

        $username =Session::get('user_info.name');

        if ($username == 'admin') {
            $list =UserModel::all();
        } else {
            $list = UserModel::all(['name' => $username]);
        }

        $this->assign('list',$list);

        $this->view->fetch('admin_list');
    }
}