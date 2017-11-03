<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexController extends CI_Controller {
	function indexController(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index');
	}
}
