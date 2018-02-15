<?php defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CommonController {
	
	// This loads the homepage
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navigation');
		$this->load->view('content/home');
		$this->load->view('layout/footer');
	}
}
