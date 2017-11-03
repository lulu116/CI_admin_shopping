<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcomeController extends CI_Controller {
	function welcomeController(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('welcome');
	}
}
