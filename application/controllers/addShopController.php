<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addShopController extends CI_Controller {
    function addShopController(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('addShopController');
    }
}
