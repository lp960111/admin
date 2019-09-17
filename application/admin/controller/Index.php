<?php


namespace app\admin\controller;


class Index extends Base
{
    public function index()
    {
        // $this->isLogin();
        return $this->view->fetch();
    }

    public function welcome()
    {
        // $this->isLogin();
        return $this->view->fetch();
    }
}