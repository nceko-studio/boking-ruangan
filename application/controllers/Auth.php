<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		$this->load->view('auth/login');
	}

	public function login_proses()
	{
		$email = $this->input->post('username');
		$password = MD5($this->input->post('password'));

		$cekEmail = $this->db->where('username', $email)->from('tbl_akun')->get()->row();

		if ($cekEmail == true) {
			if ($cekEmail->password == $password) {
				if ($cekEmail->is_active == 1) {
					$data_session = array(
						'username' => $cekEmail->username,
						'role' => $cekEmail->sts_akun,
						'id_user' => $cekEmail->id_user
					);
					$this->session->set_userdata($data_session);

					redirect('dashboard');
				} else {
					$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Akun Anda dalam penangguhan harap hubungi Admin.');
					redirect('auth/login');
				}
			} else {
				$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Password Yang Anda Masukan Tidak Sesuai.');
				redirect('auth/login');
			}
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Username Tidak Ditemukan.');
			redirect('auth/login');
		}
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
		$mr = $this->db->select('COUNT(id_user) as jumlah_mr')->from('tbl_user')->get()->row();
		$nomr = "RSK".$mr->jumlah_mr+1;
		$data = array(
            'nama_user' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tl'),
            'tgl_lahir' => $this->input->post('tgl'),
			'no_mr'		=> $nomr,
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
				'is_active'	=>  "0",
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
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('id_user');
		$this->session->sess_destroy();
		redirect('login');
	}
}
