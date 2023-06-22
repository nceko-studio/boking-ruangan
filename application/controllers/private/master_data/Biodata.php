<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	public function index()
	{
		$data['title'] = "Biodata";
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/dashboard',$data);
		$this->load->view('template/private/footer',$data);
	}
}
