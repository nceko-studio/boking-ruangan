<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Data Pegawai';
        $data['agama'] = $this->MasterData->AllAgama(); 
        $data['status_kawin'] = $this->MasterData->AllSK(); 
        $data['jenjang_pendidikan'] = $this->MasterData->AllJenjang();
        $data['identitas'] = $this->MasterData->AllIdentitas(); 
        $data['provinsi'] = $this->db->get('tbl_provinsi')->result(); 
        $data['user'] = $this->UserModel->AllPegawai(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/transaksi/data_user', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function new()
	{
		$data = array(
            'nama_user' => $this->input->post('nama'),
            'gelar_depan' => $this->input->post('gelardp'),
            'gelar_blk' => $this->input->post('gelarblk'),
            'kd_dpjp' => $this->input->post('dpjp'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'id_status_kawin' => $this->input->post('status_kawin'),
            'id_agama' => $this->input->post('agama'),
            'goldar' => $this->input->post('goldar'),
            'id_jenjang_pendidikan' => $this->input->post('jenjang'),
            'id_jurusan_pendidikan' => $this->input->post('jurusan'),
            'id_identitas' => $this->input->post('identitas'),
            'no_identitas' => $this->input->post('no_identitas'),
            'no_kk' => $this->input->post('no_kk'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'riwayat_alergi_obat' => $this->input->post('riwayat'),
            'id_provisi' => $this->input->post('provinsi'),
            'id_kabkot' => $this->input->post('kabupaten'),
            'id_kec' => $this->input->post('kecamatan'),
            'id_desa' => $this->input->post('desa'),
            'alamat' => $this->input->post('alamat'),
            'sts_group' => "2",
            'sts_user' => "1",
            'date_register' => date("Y-m-d"),
            'user_registered' => 1,
            'is_difabel' => "0"
        );

        $runtime = $this->UserModel->newUser($data);

		if (!empty($runtime)) {;
            $this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Berhasil Di Tambahkan.');
        } else {
            $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Gagal Di Tambahkan.');
        }

        redirect('pegawai');
	}

    public function hapus($id)
	{
		$hapus = $this->UserModel->DeleteUser($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Pegawai.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Pegawai.');
		}
		redirect('pegawai');
	}
}
