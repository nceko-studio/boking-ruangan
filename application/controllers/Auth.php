<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		$this->load->view('auth/login');
	}

	public function regist()
	{
        $data['agama'] = $this->MasterData->AllAgama(); 
        $data['status_kawin'] = $this->MasterData->AllSK(); 
        $data['jenjang_pendidikan'] = $this->MasterData->AllJenjang();
        $data['identitas'] = $this->MasterData->AllIdentitas(); 
        $data['provinsi'] = $this->db->get('tbl_provinsi')->result(); 
		$this->load->view('auth/pasien/registrasi_pasien',$data);
	}

	public function regist_new()
	{
		$data = array(
            'nama_user' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tl'),
            'tgl_lahir' => $this->input->post('tgl'),
            'jk' => $this->input->post('jk'),
            'id_status_kawin' => $this->input->post('status_kawin'),
            'id_agama' => $this->input->post('agama'),
            'goldar' => $this->input->post('goldar'),
            'id_jenjang_pendidikan' => $this->input->post('jenjang'),
            'id_jurusan_pendidikan' => $this->input->post('jurusan'),
            'id_identitas' => $this->input->post('identitas'),
            'no_identitas' => $this->input->post('ni'),
            'no_kk' => $this->input->post('kk'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'riwayat_alergi_obat' => $this->input->post('riwayat'),
            'id_provisi' => $this->input->post('provinsi'),
            'id_kabkot' => $this->input->post('kabupaten'),
            'id_kec' => $this->input->post('kecamatan'),
            'id_desa' => $this->input->post('desa'),
            'alamat' => $this->input->post('alamat'),
            'sts_group' => "1",
            'sts_user' => "1",
            'date_register' => date("Y-m-d"),
            'user_registered' => 1,
            'is_difabel' => "0"
        );

        $runtime = $this->UserModel->newUser($data);

		if (!empty($runtime)) {

            $data = array(
				'id_user'	=>  $runtime,
				'username'	=>  $this->input->post('username'),
				'password'	=>  MD5($this->input->post('password')),
				'is_active'	=>  "1",
				'sts_akun'	=>  5,
				'date_created'	=>  date('Y-m-d H:i:s')
			);
	
			$tambah = $this->PegawaiModel->NewAkun($data);

            if ($tambah == true) {
                $this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> ' . $this->input->post('nama') . ' Sebagai User Baru Berhasil Di Tambahkan.');
            }else {
                $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai User Baru Gagal Di Tambahkan.');
            }
        } else {
            $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai User Baru Gagal Di Tambahkan.');
        }

        redirect('login');
	}

	public function logout()
	{
		$this->load->view('template/public/home_view/header');
		$this->load->view('public/home_view/index');
		$this->load->view('template/public/home_view/footer');
	}
}
