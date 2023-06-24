<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller 
{
	// Start Gedung
	public function gedung()
	{
		$data['title'] = "Gedung";
        $data['gedung'] = $this->MasterData->AllGedung();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/ruangan/gedung',$data);
		$this->load->view('template/private/footer',$data);
	}		

    public function gedung_new()
	{
		$data = array(
			'gedung'	=>  $this->input->post('gedung')
		);

		$tambah = $this->MasterData->NewGedung($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Gedung Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Gedung Baru.');
		}
		redirect('gedung');
	}

    public function gedung_hapus($id)
	{
		$hapus = $this->MasterData->DeleteGedung($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Gedung.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Gedung.');
		}
		redirect('gedung');
	}
    // End Gedung

    // Start Lantai
	public function lantai()
	{
		$data['title'] = "Lantai";
        $data['lantai'] = $this->MasterData->AllLantai();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/ruangan/lantai',$data);
		$this->load->view('template/private/footer',$data);
	}	

    public function lantai_new()
	{
		$data = array(
			'lantai'	=>  $this->input->post('lantai')
		);

		$tambah = $this->MasterData->NewLantai($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Lantai Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Lantai Baru.');
		}
		redirect('lantai');
	}

    public function lantai_hapus($id)
	{
		$hapus = $this->MasterData->DeleteLantai($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Lantai.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Lantai.');
		}
		redirect('lantai');
	}
    // End Lantai

    // Start Jenis Ruangan
	public function jenis_ruangan()
	{
		$data['title'] = "Jenis Ruangan";
        $data['jenis_ruangan'] = $this->MasterData->AllJR();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/ruangan/jenis_ruangan',$data);
		$this->load->view('template/private/footer',$data);
	}	

    public function jenis_ruangan_new()
	{
		$data = array(
			'jenis_ruangan'	=>  $this->input->post('jenis_ruangan')
		);

		$tambah = $this->MasterData->NewJR($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Jenis  Ruangan Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Jenis  Ruangan Baru.');
		}
		redirect('jenis_ruangan');
	}

    public function jenis_ruangan_hapus($id)
	{
		$hapus = $this->MasterData->DeleteJR($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Jenis  Ruangan.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Jenis  Ruangan.');
		}
		redirect('jenis_ruangan');
	}
    // End Jenis  Ruangan

    // Start Group Ruangan
	public function group_ruangan()
	{
		$data['title'] = "Group Ruangan";
        $data['group_ruangan'] = $this->MasterData->AllGR();
        $data['jenis_ruangan'] = $this->MasterData->AllJR();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/ruangan/group_ruangan',$data);
		$this->load->view('template/private/footer',$data);
	}

    public function group_ruangan_new()
	{
		$data = array(
			'group_ruangan'	=>  $this->input->post('group_ruangan'),
			'id_jenis_ruangan'	=> $this->input->post('id_jenis_ruangan'),
		);

		$tambah = $this->MasterData->NewGR($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Group Ruangan Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Group Ruangan Baru.');
		}
		redirect('group_ruangan');
	}

    public function group_ruangan_hapus($id)
	{
		$hapus = $this->MasterData->DeleteGR($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Group Ruangan.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Group Ruangan.');
		}
		redirect('group_ruangan');
	}
    // End Group Ruangan

    // Start Kelas Rawatan
	public function kelas_rawatan()
	{
		$data['title'] = "Kelas Rawatan";
        $data['kelas_rawatan'] = $this->MasterData->AllKR();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/ruangan/kelas_rawatan',$data);
		$this->load->view('template/private/footer',$data);
	}	

    public function kelas_rawatan_new()
	{
		$data = array(
			'kelas_rawatan'	=>  $this->input->post('kelas_rawatan')
		);

		$tambah = $this->MasterData->NewKR($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Kelas Rawatan Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Kelas Rawatan Baru.');
		}
		redirect('kelas_rawatan');
	}

    public function kelas_rawatan_hapus($id)
	{
		$hapus = $this->MasterData->DeleteKR($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Kelas Rawatan.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Kelas Rawatan.');
		}
		redirect('kelas_rawatan');
	}
    // End Kelas Rawatan

    // Start Group Ruangan
	public function kelompok_ruangan()
	{
		$data['title'] = "Kelompok Ruangan";
        $data['kelompok_ruangan'] = $this->MasterData->AllKelRu();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/ruangan/kelompok_ruangan',$data);
		$this->load->view('template/private/footer',$data);
	}

    public function kelompok_ruangan_new()
	{
		$data = array(
			'kelompok_ruangan'	=>  $this->input->post('kelompok_ruangan')
		);

		$tambah = $this->MasterData->NewKelRu($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Kelompok Ruangan Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Kelompok Ruangan Baru.');
		}
		redirect('kelompok_ruangan');
	}

    public function kelompok_ruangan_hapus($id)
	{
		$hapus = $this->MasterData->DeleteKelRu($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Kelompok Ruangan.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Kelompok Ruangan.');
		}
		redirect('kelompok_ruangan');
	}
    // End Kelompok Ruangan
}
