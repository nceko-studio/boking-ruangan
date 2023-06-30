<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Laporan Pasien Berobat';
        $data['user'] = $this->db->select('a.no_register')
						->from('tbl_pendaftaran a')
						->get()
						->result(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data_user', $data);
		$this->load->view('template/private/footer', $data);
	}
}
