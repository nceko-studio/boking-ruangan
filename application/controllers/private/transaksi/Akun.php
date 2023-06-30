<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Akun';
        $data['pegawai'] = $this->PegawaiModel->AllPegawai(); 
        $data['akun'] = $this->PegawaiModel->AllAkun(); 
        $data['user'] = $this->db->get('tbl_mst_role')->result(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/transaksi/akun', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function new()
	{
		$data = array(
			'id_user'	=>  $this->input->post('pegawai'),
			'username'	=>  $this->input->post('username'),
			'password'	=>  MD5($this->input->post('password')),
			'is_active'	=>  $this->input->post('sts'),
			'sts_akun'	=>  $this->input->post('role'),
			'date_created'	=>  date('Y-m-d H:i:s')
		);

		$tambah = $this->PegawaiModel->NewAkun($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Akun Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Akun Baru.');
		}
		redirect('akun');
	}

	public function hapus($id)
	{
		$hapus = $this->PegawaiModel->DeleteAkun($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Akun.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Akun.');
		}
		redirect('akun');
	}

	public function kunci($id)
	{
		$data = array(
			'password'	=>  MD5("password@baru")
		);

		$tambah = $this->PegawaiModel->UpdateAkun($id, $data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Mereset Password.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Mereset Password.');
		}
		redirect('akun');
	}

	public function suspend($id)
	{
		$data = array(
			'is_active'	=>  "2"
		);

		$tambah = $this->PegawaiModel->UpdateAkun($id, $data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Melakukan Suspend Akun.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Melakukan Suspend Akun.');
		}
		redirect('akun');
	}

	public function aktif($id)
	{
		$data = array(
			'is_active'	=>  "1"
		);

		$tambah = $this->PegawaiModel->UpdateAkun($id, $data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Melakukan Aktif Akun.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Melakukan Aktif Akun.');
		}
		redirect('akun');
	}
}
