<?php

class ProductModel extends CI_Model
{

    function ProductModel()
    {
        $this->load->database();
    }

    function insertShop($title,$price,$detail,$stock){
        $sql = "insert into product(title,price,detail,stock) values('$title',$price,'$detail',$stock)";
        $query = $this->db->query($sql);
        echo $query;
    }

    function insertImg($img,$product_id){
        $sql = "insert into images(imgUrl,product_id) values('$img','$product_id')";
        $query = $this->db->query($sql);
        echo $query;
    }

    function getProductId($title,$price){
        $sql = "select product_id from product where title='$title' and price = '$price'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function insertSize($table,$size_name,$product_id){
        $sql = "insert into $table(size_name,product_id) values('$size_name','$product_id')";
        $query = $this->db->query($sql);
        echo $query;
    }
    function insertColor($table,$color_name,$product_id){
        $sql = "insert into $table(color_name,product_id) values('$color_name','$product_id')";
        $query = $this->db->query($sql);
        echo $query;
    }

}
?>