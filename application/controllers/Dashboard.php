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
			$data['dokter'] = $this->db->select('COUNT(id_user) as jumlah_dokter')->from('tbl_user')->where('kd_dpjp =', NULL)->get()->row();
			$data['ruangan'] = $this->db->select('COUNT(id_ruangan_bed) as jumlah_ruangan_bed')->from('tbl_ruangan_bed')->where('sts_bed','1')->get()->row();
			$data['pasien'] = $this->db->select('COUNT(no_register) as jumlah_pasien')->from('tbl_pendaftaran')->where('is_confrim = "1" AND is_cancled = "0" AND sts_selesai = "0"')->get()->row();
			$data['title'] = 'Dashboard';
			$this->load->view('template/public/user_panel/header', $data);
			$this->load->view('template/public/user_panel/sidebar', $data);
			$this->load->view('template/public/user_panel/navbar', $data);
			$this->load->view('public/user_area/dashboard', $data);
			$this->load->view('template/public/user_panel/footer', $data);
		}
	}
}
