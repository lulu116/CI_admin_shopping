<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addshopsubmit extends CI_Controller {
    function addshopsubmit(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('addShopController');
    }

    function getaddshopsubmit(){
        $data = $_POST['title'];
        echo $data;
    }
}
