<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
	public function index()
	{
        $user_id = 20;
		$data['title'] = 'Riwayat Berobat';
        $data['riwayat'] = $this->LaporanModel->AllLaporanById($user_id); 
		$this->load->view('template/public/user_panel/header', $data);
		$this->load->view('template/public/user_panel/sidebar', $data);
		$this->load->view('template/public/user_panel/navbar', $data);
		$this->load->view('public/user_area/riwayat', $data);
		$this->load->view('template/public/user_panel/footer', $data);
	}
}
