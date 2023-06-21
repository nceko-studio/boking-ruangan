<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('template/public/home_view/header',$data);
		$this->load->view('template/public/home_view/navbar',$data);
		$this->load->view('public/home_view/index',$data);
		$this->load->view('template/public/home_view/footer',$data);
	}
}
