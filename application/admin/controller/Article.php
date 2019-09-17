<?php


namespace app\admin\controller;


class Article extends Base
{
    public function index()
    {
        return $this->view->fetch();
    }

    public function articleList()
    {
        return $this->view->fetch('article-list');
    }

    public function articleAdd()
    {
        return $this->view->fetch('article-add');
    }
}