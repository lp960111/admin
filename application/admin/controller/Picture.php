<?php


namespace app\admin\controller;


class Picture extends Base
{
    public function pictureList()
    {
        return $this->view->fetch('picture-list');
    }

    public function pictureAdd()
    {
        return $this->view->fetch('picture-add');
    }

    public function pictureShow()
    {
        return $this->view->fetch('picture-show');
    }
}