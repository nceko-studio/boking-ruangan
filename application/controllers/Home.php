<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('template/public/home_view/header');
		$this->load->view('public/home_view/index');
		$this->load->view('template/public/home_view/footer');
	}
}
