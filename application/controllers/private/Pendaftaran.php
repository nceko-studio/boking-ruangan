<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pendaftaran Pasien Baru';
        $data['agama'] = $this->MasterData->AllAgama(); 
        $data['status_kawin'] = $this->MasterData->AllSK(); 
        $data['jenjang_pendidikan'] = $this->MasterData->AllJenjang();
        $data['identitas'] = $this->MasterData->AllIdentitas(); 
        $data['dokter'] = $this->db->select('id_user, func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_dokter')->where('sts_group',"2")->where_not_in('kd_dpjp',null)->get('tbl_user')->result(); 
        $data['provinsi'] = $this->db->get('tbl_provinsi')->result(); 
        $data['ruangan'] = $this->M_ruangan->AllRuangan(); 
        $data['lantai'] = $this->MasterData->AllLantai(); 
		$data['mr'] = $this->db->select('COUNT(id_user) as jumlah_mr')->from('tbl_user')->get()->row();
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/pendaftaran', $data);
		$this->load->view('template/private/footer', $data);
	}

    public function lama()
	{
		$data['title'] = 'Pendaftaran Pasien Lama';
        $data['user']  = $this->db->select('id_user, nama_user')->where('sts_group',"1")->get('tbl_user')->result(); 
        $data['dokter'] = $this->db->select('id_user, func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_dokter')->where('sts_group',"2")->where_not_in('kd_dpjp',null)->get('tbl_user')->result(); 
        $data['lantai'] = $this->MasterData->AllLantai();  
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/pendaftaran_lama', $data);
		$this->load->view('template/private/footer', $data);
	}

    public function jurusan()
	{
        $id	=	$this->input->post('jenjang');
		$data	=	$this->db->where('id_jenjang_pendidikan', $id)->get('tbl_jurusan_pendidikan')->result();
		echo json_encode($data);
	}

    public function kabupaten()
	{
        
        $id	=	$this->input->post('provinsi');
		$data	=	$this->db->where('id_provinsi', $id)->get('tbl_kabupaten')->result();
		echo json_encode($data);
	}


    public function kecamatan()
	{
        $id	=	$this->input->post('kabupaten');
		$data	=	$this->db->where('id_kabupaten', $id)->get('tbl_kecamatan')->result();
		echo json_encode($data);
	}

    public function desa()
	{
        
        $id	=	$this->input->post('kecamatan');
		$data	=	$this->db->where('id_kecamatan', $id)->get('tbl_desa')->result();
		echo json_encode($data);
	}

    public function ruang()
	{
        $id	=	$this->input->post('lantai');
		$data	=	$this->db->where('id_lantai', $id)->get('tbl_ruangan')->result();
		echo json_encode($data);
	}

    public function bed()
	{
        $id	=	$this->input->post('ruangan');
		$data	=	$this->db->where('id_ruangan', $id)->get('tbl_ruangan_bed')->result();
		echo json_encode($data);
	}

    public function new()
	{
        $data = array(
            'nama_user' => $this->input->post('nama'),
			'no_mr' => $this->input->post('nomr'),
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
            'no_hp' => $this->input->post('nop'),
            'riwayat_alergi_obat' => $this->input->post('aler'),
            'id_provisi' => $this->input->post('provinsi'),
            'id_kabkot' => $this->input->post('kabupaten'),
            'id_kec' => $this->input->post('kecamatan'),
            'id_desa' => $this->input->post('desa'),
            'alamat' => $this->input->post('alamat'),
            'sts_user' => "1",
            'date_register' => date("Y-m-d"),
            'user_registered' => $this->session->userdata('id_user'),
            'is_difabel' => "0"
        );

        $runtime = $this->UserModel->newUser($data);

        if (!empty($runtime)) {
            $jam = date('H');
            $detik = date('s');
			$awal = $detik.$jam;
            $makan = $jam . $detik;
			$uye = $awal.$makan;
            $datas = [
                'no_register' => $uye,
                'tgl_daftar' => date("Y-m-d H:i:s"),
                'id_pasien' => $runtime,
                'id_jenis_rawatan' => "1",
                'tgl_berobat' => date('Y-m-d H:i:s'),
                'is_confrim' => "1",
                'id_ruangan_bed' => $this->input->post('bed'),
                'is_cancled' => "0",
                'sts_selesai' => "0",
                'id_dokter' => $this->input->post('id_dokter'),
                'gejala_pasien' => "-",
                'diagnosa_awal' => $this->input->post('diagnosa')
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

        } else {
            $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> ' . $this->input->post('nama') . ' Sebagai Pasien Baru Gagal Di Tambahkan.');
        }

        redirect('pendaftaran');
	}

    public function new_lama()
	{
            $jam = date('H');
            $detik = date('s');
			$awal = $detik.$jam;
            $makan = $jam . $detik;
			$uye = $awal.$makan;
            $datas = [
                'no_register' => $uye,
                'tgl_daftar' => date("Y-m-d H:i:s"),
                'id_pasien' => $this->input->post('id_user'),
                'id_jenis_rawatan' => "1",
                'tgl_berobat' => date('Y-m-d H:i:s'),
                'is_confrim' => "1",
                'id_ruangan_bed' => $this->input->post('bed'),
                'is_cancled' => "0",
                'sts_selesai' => "0",
                'id_dokter' => $this->input->post('id_dokter'),
                'gejala_pasien' => "-",
                'diagnosa_awal' => $this->input->post('diagnosa')
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

        redirect('pendaftaran_lama');
	}
}
