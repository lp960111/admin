<?php


namespace app\admin\controller;


class Member extends Base
{
    public function memberList()
    {
        return $this->view->fetch('member-list');
    }


    public function memberAdd()
    {
        return $this->view->fetch('member-add');
    }

    public function memberShow()
    {
        return $this->view->fetch('member-show');
    }

    public function changePassword()
    {
        return $this->view->fetch('change-password');
    }

    public function memberDel()
    {
        return $this->view->fetch('member-del');
    }

    public function memberLevel()
    {
        return $this->view->fetch('member-level');
    }

    public function memberScoreOperation()
    {
        return $this->view->fetch('member-score-operation');
    }

    public function memberRecordBrowse()
    {
        return $this->view->fetch('member-record-browse');
    }

    public function memberRecordDownload()
    {
        return $this->view->fetch('member-record-download');
    }

    public function memberRecordShare()
    {
        return $this->view->fetch('member-record-share');
    }
}