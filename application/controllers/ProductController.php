<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {
    function ProductController(){
        parent::__construct();
        $this->load->helper('url');
       $this->load->model('ProductModel');
    }

    public function index()
    {
        $this->load->view('addShopController');
    }
    function addProduct(){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $color_name = $_POST['color'];
        $size_name = $_POST['size'];
        $detail = $_POST['detail'];
        $stock = $_POST['stock'];
        $img = $_POST['img'];

        //插入产品
       $this->ProductModel->insertShop($title,$price,$detail,$stock);
        //得到产品ID
        $productId = $this->ProductModel->getProductId($title,$price);
       var_dump($productId[0]['product_id']);
        //插入图片
       $this->ProductModel->insertImg($img,$productId[0]['product_id']);
        //插入尺寸
        $this->ProductModel->insertSize(size,$size_name,$productId[0]['product_id']);
        //插入颜色
        $this->ProductModel->insertColor(color,$color_name,$productId[0]['product_id']);
    }

}
