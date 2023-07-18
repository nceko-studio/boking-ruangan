<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Boking extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pesan Ruangan';
        $data['dokter'] = $this->db->select('id_user, func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_dokter')->where('sts_group',"2")->where_not_in('kd_dpjp',null)->get('tbl_user')->result(); 
        $data['ruangan'] = $this->M_ruangan->AllRuangan(); 
        $data['lantai'] = $this->MasterData->AllLantai(); 
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
        $runtime = $jam . $detik;
        $user_id = $this->session->userdata('id_user');
		$uye = "1212".$runtime;
            $datas = [
                'no_register' => $uye,
                'tgl_daftar' => date("Y-m-d H:i:s"),
                'id_pasien' => $user_id,
                'is_ugd' => $this->input->post('ugd'),
                'id_jenis_rawatan' => $this->input->post('jenis_rawatan'),
                'laka_lantas' => $this->input->post('laka_lantas'),
                'tgl_berobat' => date('Y-m-d H:i:s'),
                'is_confrim' => "0",
                'id_ruangan_bed' => $this->input->post('bed'),
                'is_cancled' => "0",
                'sts_selesai' => "0",
                'id_dokter' => $this->input->post('id_dokter'),
            ];

            $sorttime = $this->UserModel->NewRegist($datas);

            if ($sorttime == true) {
                $hus = $this->M_ruangan->updateBedKosong($this->input->post('bed'));

                if ($hus == true) {                    
                    $this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Berhasil Di Tambahkan.');
                }else {
                    $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Gagal Di Tambahkan.');
                }
            }else {
                $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Gagal Di Tambahkan.');
            }

        redirect('boking_ruangan');
	}
}
