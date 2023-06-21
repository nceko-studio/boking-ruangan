<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		$this->load->view('auth/login');
	}

	public function regist()
	{
		$this->load->view('auth/pasien/registrasi_pasien');
	}

	public function logout()
	{
		$this->load->view('template/public/home_view/header');
		$this->load->view('public/home_view/index');
		$this->load->view('template/public/home_view/footer');
	}
}