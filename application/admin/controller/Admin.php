<?php


namespace app\admin\controller;

class Admin extends Base
{
    public  function login()
    {
        return $this->view->fetch('login');
    }
    public function adminList()
    {
        return $this->view->fetch('admin-list');
    }

    public function adminAdd()
    {
        return $this->view->fetch('admin-add');
    }

    public function adminPermission()
    {
        return $this->view->fetch('admin-permission');
    }

    public function adminRole()
    {
        return $this->view->fetch('admin-role');
    }

    public function adminRoleAdd()
    {
        return $this->view->fetch('admin-role-add');
    }

    public function adminPasswordEdit()
    {
        return $this->view->fetch('admin-password-edit');
    }
}