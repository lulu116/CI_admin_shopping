<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showShopController extends CI_Controller {
	function showShopController(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{

		$this->load->view('showShopController');
	}
}
