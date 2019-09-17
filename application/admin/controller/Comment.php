<?php


namespace app\admin\controller;


class Comment extends Base
{
    public function commentList()
    {
        return $this->view->fetch('feedback-list');
    }
}