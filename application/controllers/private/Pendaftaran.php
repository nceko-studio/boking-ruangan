<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pendaftaran';
        $data['agama'] = $this->MasterData->AllAgama(); 
        $data['status_kawin'] = $this->MasterData->AllSK(); 
        $data['jenjang_pendidikan'] = $this->MasterData->AllJenjang(); 
        $data['jurusan_pendidikan'] = $this->MasterData->AllJurusan(); 
        $data['identitas'] = $this->MasterData->AllIdentitas(); 
        $data['dokter'] = $this->MasterData->AllIdentitas(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/pendaftaran', $data);
		$this->load->view('template/private/footer', $data);
	}

    public function new()
	{
        $data = array(
            'nama_user' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tl'),
            'tgl_lahir' => $this->input->post('tgl'),
            'jk' => $this->input->post('jenis_kelamin'),
            'id_status_kawin' => $this->input->post('status_kawin'),
            'id_agama' => $this->input->post('agama'),
            'goldar' => $this->input->post('goldar'),
            'id_jenjang_pendidikan' => $this->input->post('jenjang'),
            'id_jurusan_pendidikan' => $this->input->post('jurusan'),
            'id_identitas' => $this->input->post('identitas'),
            'no_identitas' => $this->input->post('ni'),
            'no_kk' => $this->input->post('nk'),
            'email' => $this->input->post('nop'),
            'riwayat_alergi_obat' => $this->input->post('email')
        );

        $runtime = $this->UserModel->newUser($data);

        if ($runtime == true) {
            $insertedUserId = $this->runtime->insert_id();

            $uye = 1212+$insertedUserId;
            $datas = [
                'no_register' => $uye,
                'tgl_daftar' => date("Y-m-d H:i:s"),
                'id_pasien' => $insertedUserId,
                'is_ugd' => $this->input->post('ugd'),
                'id_jenis_rawatan' => $this->input->post('jenis_rawatan'),
                'laka_lantas' => $this->input->post('laka_lantas'),
                'tgl_berobat' => date('Y-m-d H:i:s'),
                'is_confrim' => 1,
                'id_ruangan_bed' => $this->input->post('id_bed'),
                'is_cancled' => 0,
                'ket_cancled' => null,
                'id_dokter' => $this->input->post('jurusan'),
                'sts_selesai' => null,
                'tgl_selesai' => null,
            ];

            $sorttime = $this->UserModel->NewRegist($datas);

            if ($sorttime == true) {
                $this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Berhasil Di Tambahkan.');
            }else {
                $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Gagal Di Tambahkan.');
            }

        } else {
            $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Gagal Di Tambahkan.');
        }

        redirect('pendaftaran');
	}
}
