<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Data Pasien Berobat';
		if ($this->session->userdata('role') == 3) {
			$data['user'] = $this->UserModel->AllUserDaftarById($this->session->userdata('id_user')); 
		}else{
			$data['user'] = $this->UserModel->AllUserDaftar(); 
		}
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data_pasien', $data);
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

	public function tambah($no_register)
	{
		$data['title'] = 'Perawat Pasien';
        $data['user'] = $this->UserModel->UserDaftarByNoreg($no_register); 
        $data['perawat'] = $this->db->select('id_user, func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_dokter')->where('sts_group',"2")->where('jns_user',"2")->get('tbl_user')->result(); 
        $data['long_leng'] = $this->UserModel->DataPerawat($no_register); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data_pasien_perawat', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function tambah_proses($no_register)
	{
		$data = array(
			'no_register'	=>  $this->input->post('no_register'),
			'id_perawat'	=>  $this->input->post('perawat')
		);

		$tambah = $this->UserModel->PerawatInsert($data);

		if ($tambah == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahakan Perawat Baru.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahakan Perawat Baru.');
		}
		redirect('private/pasien/tambah/'.$no_register);
	}

	public function tambah_hapus($id, $no_register)
	{
		$hapus = $this->UserModel->DeletePerawatan($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Data Perawat Yang Merawat.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Data Perawat Yang Merawat.');
		}
		redirect('private/pasien/tambah/'.$no_register);
	}

	public function pulang($no_register)
	{
		$data = array(
			'sts_selesai' => "1",
			'tgl_selesai' => date('Y-m-d H:i:s')
		);
		$pulang = $this->UserModel->PendaftaranUpdate($no_register,$data);
		$checkBed = $this->db->where('no_register',$no_register)->get('tbl_pendaftaran')->row();

		if ($pulang == true) {
			$hus = $this->M_ruangan->updateBedTesedia($checkBed->id_ruangan_bed);

			if ($hus == true) {                    
				$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Memulangkan Pasien.');
			}else {
				$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Memulangkan Pasien');
			}
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Memulangkan Pasien.');
		}
		redirect('data_pasien');
	}

	public function hapus($no_register)
	{
		$data = array(
			'is_cancled' => "1",
			'ket_cancled' => "1"
		);

		$pulang = $this->UserModel->PendaftaranUpdate($no_register,$data);
		$checkBed = $this->db->where('no_register',$no_register)->get('tbl_pendaftaran')->row();

		if ($pulang == true) {
			$hus = $this->M_ruangan->updateBedTesedia($checkBed->id_ruangan_bed);

			if ($hus == true) {                    
				$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Membatalkan Pemesanan Pasien.');
			}else {
				$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Membatalkan Pemesanan Pasien.');
			}
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Membatalkan Pemesanan Pasien.');
		}
		redirect('data_pasien');
	}

	public function verified($no_register)
	{
		$data['title'] = 'Verifikasi Pasien';
        $data['user'] = $this->UserModel->UserVerifiedByNoreg($no_register); 
        $data['alluser']  = $this->db->select('id_user, nama_user')->where('sts_group',"1")->get('tbl_user')->result(); 
        $data['dokter'] = $this->db->select('id_user, func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_dokter')->where('sts_group',"2")->where('jns_user',"1")->get('tbl_user')->result(); 
        $data['lantai'] = $this->MasterData->AllLantai();  
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/verified', $data);
		$this->load->view('template/private/footer', $data);
	}



	public function berobat()
	{
		$no_register = $this->input->post('no_register');
		$data = array(
			'tgl_berobat' => date('Y-m-d H:i:s'),
			'is_confrim' => "1",
			'id_ruangan_bed' => $this->input->post('bed'),
			'is_cancled' => "0",
			'sts_selesai' => "0",
			'id_dokter' => $this->input->post('id_dokter'),
			'diagnosa_awal' => $this->input->post('diagnosa')
		);

		$pulang = $this->UserModel->PendaftaranUpdate($no_register,$data);

		if ($pulang == true) {

			$hus = $this->M_ruangan->updateBedKosong($this->input->post('bed'));

			if ($hus == true) {                    
				$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Mengonfirmasi Pemesanan Pasien.');
			}else {
				$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Mengonfirmasi Pemesanan Pasien.');
			}
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Mengonfirmasi Pemesanan Pasien.');
		}
		redirect('data_pasien');
	}

	public function views($no_register)
	{
		$data['title'] = 'Pasien Detail';
        $data['user'] = $this->UserModel->UserVerifiedByNoreg($no_register);
        $data['alluser']  = $this->db->select('id_user, nama_user')->where('sts_group',"1")->get('tbl_user')->result(); 
        $data['dokter'] = $this->db->select('id_user, func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_dokter')->where('sts_group',"2")->where('jns_user',"1")->get('tbl_user')->result(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/pasien_views', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function rujuk($no_register)
	{
		$data['title'] = 'Rujuk Pasien';
        $data['user'] = $this->UserModel->UserVerifiedByNoreg($no_register); 
        $data['alluser']  = $this->db->select('id_user, nama_user')->where('sts_group',"1")->get('tbl_user')->result(); 
        $data['dokter'] = $this->db->select('id_user, func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_dokter')->where('sts_group',"2")->where('jns_user',"1")->get('tbl_user')->result(); 
        $data['lantai'] = $this->MasterData->AllLantai();  
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/rujuk', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function rujuk_proses()
	{
		$no_register = $this->input->post('no_register');
		$data = array(
			'is_rujuk' => "1",
			'faskes_rujuk' => $this->input->post('faskes_rujuk')
		);

		$pulang = $this->UserModel->PendaftaranUpdate($no_register,$data);

		if ($pulang == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil memproses rujukan pasien.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal memproses rujukan pasien.');
		}
		redirect('data_pasien');
	}
}
