<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

    // Start Jenjang Pendidikan
	public function jenjang()
	{
		$data['title'] = "Jenjang Pendidikan";
        $data['jenjang'] = $this->MasterData->AllJenjang();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/pendidikan/jenjang',$data);
		$this->load->view('template/private/footer',$data);
	}

    public function jenjang_new()
	{
		$data = array(
			'jenjang_pendidikan'	=>  $this->input->post('jenjang')
		);

		$tambah = $this->MasterData->NewJenjang($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Jenjang Pendidikan Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Jenjang Pendidikan Baru.');
		}
		redirect('jenjang');
	}

    public function jenjang_hapus($id)
	{
		$hapus = $this->MasterData->DeleteJenjang($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Jenjang Pendidikan.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Jenjang Pendidikan.');
		}
		redirect('jenjang');
	}

    // End Jenjang Pendidikan

    public function jurusan()
	{
		$data['title'] = "Jurusan Pendidikan";
        $data['jenjang'] = $this->MasterData->AllJenjang();
        $data['jurusan'] = $this->MasterData->AllJurusan();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/pendidikan/jurusan',$data);
		$this->load->view('template/private/footer',$data);
	}

    public function jurusan_new()
	{
		$data = array(
			'id_jenjang_pendidikan'	=>  $this->input->post('id_jenjang'),
			'jurusan_pendidikan'	=>  $this->input->post('jurusan')
		);

		$tambah = $this->MasterData->NewJurusan($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Jurusan Pendidikan Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Jurusan Pendidikan Baru.');
		}
		redirect('jurusan');
	}

    public function jurusan_hapus($id)
	{
		$hapus = $this->MasterData->DeleteJurusan($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Jurusan Pendidikan.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Jurusan Pendidikan.');
		}
		redirect('jurusan');
	}
}
