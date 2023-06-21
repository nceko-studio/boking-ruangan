<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_kerja extends CI_Controller {
	public function index()
	{
		$data['title'] = "Unit Kerja";
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/dashboard',$data);
		$this->load->view('template/private/footer',$data);
	}
}
