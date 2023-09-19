<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Boking extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Daftar Ranap';
		$this->load->view('template/public/user_panel/header', $data);
		$this->load->view('template/public/user_panel/sidebar', $data);
		$this->load->view('template/public/user_panel/navbar', $data);
		$this->load->view('public/user_area/boking', $data);
		$this->load->view('template/public/user_panel/footer', $data);
	}

    public function new()
	{
        $jam = date('H');
        $detik = date('s');
		$awal = $detik.$jam;
        $runtime = $jam . $detik;
        $user_id = $this->session->userdata('id_user');
		$jamila = $this->input->post("tanggal")." ".$this->input->post("waktu");
		$uye = $awal.$runtime;
            $datas = [
                'no_register' => $uye,
                'tgl_daftar' => date("Y-m-d H:i:s"),
                'id_pasien' => $user_id,
                'id_jenis_rawatan' => "1",
                'tgl_berobat' => $jamila,
                'is_confrim' => "0",
                'is_cancled' => "0",
                'sts_selesai' => "0"
            ];

            $sorttime = $this->UserModel->NewRegist($datas);

            if ($sorttime == true) {
				$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong>  Melakukan pendaftaran berobat rawat inap.');
            }else {
                $this->session->set_flashdata('error', '<strong>ERROR!!!</strong>  Melakukan pendaftaran berobat rawat inap.');
            }

        redirect('riwayat');
	}
}
