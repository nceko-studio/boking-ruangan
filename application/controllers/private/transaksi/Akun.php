<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Data Pasien';
        $data['user'] = $this->UserModel->AllUserDaftar(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data_user', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function biodata()
	{
		$data['title'] = 'Data Pasien';
        $data['user'] = $this->UserModel->AllUser(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/pasien', $data);
		$this->load->view('template/private/footer', $data);
	}

}
