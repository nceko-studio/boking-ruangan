<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller 
{
    // Start Agama
	public function agama()
	{
		$data['title'] = "Agama";
        $data['agama'] = $this->MasterData->AllAgama();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/biodata/agama',$data);
		$this->load->view('template/private/footer',$data);
	}		

    public function agama_new()
	{
		$data = array(
			'agama'	=>  $this->input->post('agama')
		);

		$tambah = $this->MasterData->NewAgama($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Agama Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Agama Baru.');
		}
		redirect('agama');
	}

    public function agama_hapus($id)
	{
		$hapus = $this->MasterData->DeleteAgama($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Agama.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Agama.');
		}
		redirect('agama');
	}
    // End Agama

    // Start Identitas
	public function identitas()
	{
		$data['title'] = "Identitas";
        $data['identitas'] = $this->MasterData->AllIdentitas();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/biodata/identitas',$data);
		$this->load->view('template/private/footer',$data);
	}	

    public function identitas_new()
	{
		$data = array(
			'identitas'	=>  $this->input->post('identitas')
		);

		$tambah = $this->MasterData->NewIdentitas($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Identitas Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Identitas Baru.');
		}
		redirect('identitas');
	}

    public function identitas_hapus($id)
	{
		$hapus = $this->MasterData->DeleteIdentitas($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Identitas.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Identitas.');
		}
		redirect('identitas');
	}
    // End Identitas

    // Start Status Kawin
	public function status_kawin()
	{
		$data['title'] = "Status Kawin";
        $data['status_kawin'] = $this->MasterData->AllSK();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/biodata/status_kawin',$data);
		$this->load->view('template/private/footer',$data);
	}	

    public function status_kawin_new()
	{
		$data = array(
			'status_kawin'	=>  $this->input->post('status_kawin')
		);

		$tambah = $this->MasterData->NewSK($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Status Kawin Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Status Kawin Baru.');
		}
		redirect('status_kawin');
	}

    public function status_kawin_hapus($id)
	{
		$hapus = $this->MasterData->DeleteSK($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Status Kawin.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Status Kawin.');
		}
		redirect('status_kawin');
	}
    // End Status Kawin

    // Start Status Pegawai
	public function status_pegawai()
	{
		$data['title'] = "Status Pegawai";
        $data['status_pegawai'] = $this->MasterData->AllSP();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/biodata/status_pegawai',$data);
		$this->load->view('template/private/footer',$data);
	}

    public function status_pegawai_new()
	{
		$data = array(
			'status_pegawai'	=>  $this->input->post('status_pegawai')
		);

		$tambah = $this->MasterData->NewSP($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Status Pegawai Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Status Pegawai Baru.');
		}
		redirect('status_pegawai');
	}

    public function status_pegawai_hapus($id)
	{
		$hapus = $this->MasterData->DeleteSP($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Status Pegawai.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Status Pegawai.');
		}
		redirect('status_pegawai');
	}
    // End Status Pegawai
}
