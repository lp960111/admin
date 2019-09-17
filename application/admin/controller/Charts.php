<?php


namespace app\admin\controller;


class Charts extends Base
{
    public function charts1()
    {
        return $this->view->fetch('charts-1');
    }

    public function charts2()
    {
        return $this->view->fetch('charts-2');
    }

    public function charts3()
    {
        return $this->view->fetch('charts-3');
    }

    public function charts4()
    {
        return $this->view->fetch('charts-4');
    }

    public function charts5()
    {
        return $this->view->fetch('charts-5');
    }

    public function charts6()
    {
        return $this->view->fetch('charts-6');
    }

    public function charts7()
    {
        return $this->view->fetch('charts-7');
    }
}