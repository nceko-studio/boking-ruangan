<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_kerja extends CI_Controller {
	public function index()
	{
		$data['title'] = "Unit Kerja";
        $data['jenjang'] = $this->MasterData->AllUK();
		$this->load->view('template/private/header',$data);
		$this->load->view('template/private/navbar',$data);
		$this->load->view('template/private/sidebar',$data);
		$this->load->view('private/master-data/unit_kerja',$data);
		$this->load->view('template/private/footer',$data);
	}

    public function uk_new()
	{
		$data = array(
			'unit_kerja'	=>  $this->input->post('uk')
		);

		$tambah = $this->MasterData->NewUK($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Unit Kerja Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Unit Kerja Baru.');
		}
		redirect('unit_kerja');
	}

    public function uk_hapus($id)
	{
		$hapus = $this->MasterData->DeleteUK($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Unit Kerja.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Unit Kerja.');
		}
		redirect('unit_kerja');
	}
}
