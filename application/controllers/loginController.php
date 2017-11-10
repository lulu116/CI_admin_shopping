<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
    function loginController(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('login');
    }

}
