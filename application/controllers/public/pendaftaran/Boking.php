<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Boking extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pesan Ruangan';
		$this->load->view('template/public/user_panel/header', $data);
		$this->load->view('template/public/user_panel/sidebar', $data);
		$this->load->view('template/public/user_panel/navbar', $data);
		$this->load->view('public/user_area/boking', $data);
		$this->load->view('template/public/user_panel/footer', $data);
	}
}
