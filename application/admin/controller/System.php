<?php


namespace app\admin\controller;


class System extends Base
{
    public function systemBase()
    {
        return $this->view->fetch('system-base');
    }

    public function systemCategory()
    {
        return $this->view->fetch('system-category');
    }

    public function systemCategoryAdd()
    {
        return $this->view->fetch('system-category-add');
    }

    public function systemData()
    {
        return $this->view->fetch('system-data');
    }

    public function systemLog()
    {
        return $this->view->fetch('system-log');
    }

    public function systemShielding()
    {
        return $this->view->fetch('system-shielding');
    }
}