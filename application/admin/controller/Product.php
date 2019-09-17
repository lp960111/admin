<?php


namespace app\admin\controller;


class Product extends Base
{
    public function productList()
    {
        return $this->view->fetch('product-list');
    }

    public function productBrand()
    {
        return $this->view->fetch('product-brand');
    }

    public function productAdd()
    {
        return $this->view->fetch('product-add');
    }

    public function productCategory()
    {
        return $this->view->fetch('product-category');
    }

    public function productCategoryAdd()
    {
        return $this->view->fetch('product-category-add');
    }
}