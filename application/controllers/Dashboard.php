<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('role') != 5) {
			$data['title'] = 'Dashboard';
			$this->load->view('template/private/header', $data);
			$this->load->view('template/private/navbar', $data);
			$this->load->view('template/private/sidebar', $data);
			$this->load->view('private/dashboard', $data);
			$this->load->view('template/private/footer', $data);
		} else {
			$data['title'] = 'Dashboard';
			$this->load->view('template/public/user_panel/header', $data);
			$this->load->view('template/public/user_panel/sidebar', $data);
			$this->load->view('template/public/user_panel/navbar', $data);
			$this->load->view('public/user_area/dashboard', $data);
			$this->load->view('template/public/user_panel/footer', $data);
		}
	}
}
