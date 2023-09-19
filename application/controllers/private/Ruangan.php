<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Data Ruangan';
        $data['ruangan'] = $this->M_ruangan->AllRuangan(); 
        $data['lantai'] = $this->MasterData->AllLantai(); 
        $data['gedung'] = $this->MasterData->AllGedung(); 
        $data['kelompok'] = $this->MasterData->AllKelRu(); 
        $data['kelas'] = $this->MasterData->AllKR(); 
        $data['group'] = $this->MasterData->AllGR(); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data-ruangan/index', $data);
		$this->load->view('template/private/footer', $data);
	}

    public function new()
	{
        $data = array(
            'nama_ruangan' => $this->input->post('nr'),
            'no_ruangan' => $this->input->post('nmr'),
            'id_group_ruangan' => $this->input->post('id_group'),
            'id_kelas_rawatan' => $this->input->post('id_kelas'),
            'id_kelompok_ruangan' => $this->input->post('id_kelompok'),
            'id_gedung' => $this->input->post('id_gedung'),
            'id_lantai' => $this->input->post('id_lantai'),
        );

        $runtime = $this->M_ruangan->NewRuangan($data);

        if (!empty($runtime)) {
            $datas = array(
                'id_ruangan' => $runtime,
                'fasilitas_ruangan' => "-",
                'deskripsi' => "-",
                'gambar' => "-",
            );

            $sorttime = $this->M_ruangan->NewFasil($datas);

            if ($sorttime == true) {
                $this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Data Ruangan Baru Berhasil Di Tambahkan.');
            }else {
                $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Data Ruangan Baru Gagal Di Tambahkan.');
            }
        } else {
            $this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Data Ruangan Baru Gagal Di Tambahkan.');
        }

        redirect('data_ruangan');
	}

    public function hapus($id)
	{
		$hapus = $this->M_ruangan->DeleteRuangan($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Data Ruangan.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Data Ruangan.');
		}
		redirect('data_ruangan');
	}

    public function bed($id)
	{
		$data['title'] = 'Data Bed Ruangan';
        $data['ruangan'] = $this->M_ruangan->ByIdRuangan($id); 
        $data['bed'] = $this->M_ruangan->BedByRuangan($id); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data-ruangan/bed', $data);
		$this->load->view('template/private/footer', $data);
	}

    public function bed_new($id)
	{
        $data = array(
            'id_ruangan' => $this->input->post('id_ruangan'),
            'no_bed' => $this->input->post('bed'),
            'kondisi' => $this->input->post('kondisi'),
            'sts_bed' => "1",
        );

		$add = $this->M_ruangan->NewBed($data);

		if ($add == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahkan Data Bed.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahkan Data Bed.');
		}
		redirect('private/ruangan/bed/'.$id);
	}

    public function bed_hapus($id)
	{
		$hapus = $this->M_ruangan->DeleteBed($id);

		if ($hapus == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menghapus Data Bed.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menghapus Data Bed.');
		}
		redirect('private/ruangan/bed/'.$id);
	}

    public function fasilitas($id)
	{
		$data['title'] = 'Data Fasilitas Ruangan';
        $data['ruangan'] = $this->M_ruangan->ByIdRuangan($id); 
        $data['fasilitas'] = $this->M_ruangan->FasilitasByRuangan($id); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data-ruangan/fasil', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function addFasilitas() {
		$data = array(
            'id_ruangan' => $this->input->post('id'),
            'fasilitas_ruangan' => $this->input->post('nf'),
            'deskripsi' => $this->input->post('dsk'),
        );


		$sorttime = $this->M_ruangan->NewFasil($data);

		if ($sorttime == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Data Fasilitas Baru Berhasil Di Tambahkan.');
		}else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Data Fasilitas Baru Gagal Di Tambahkan.');
		}

        redirect('private/ruangan/fasilitas/' . $this->input->post('id'));

	}

	public function editFasilitas() {
		$data = array(
            'id_ruangan' => $this->input->post('id'),
            'fasilitas_ruangan' => $this->input->post('nf'),
            'deskripsi' => $this->input->post('dsk'),
        );

		$sorttime = $this->M_ruangan->UpdateFasil($this->input->post('id'), $data);


		if ($sorttime == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Data Fasilitas Baru Berhasil Di Update.');
		}else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Data Fasilitas Baru Gagal Di Update.');
		}

        redirect('private/ruangan/fasilitas/' . $this->input->post('id'));
	}

	public function deleteFasilitas($id) {
		$fsl = $this->db->select('id_ruangan, id_fasilitas_ruangan')->where('id_fasilitas_ruangan', $id)->get('tbl_fasilitas_ruanngan')->result();
		$sorttime = $this->M_ruangan->deleteFasilitas($id);


		if ($sorttime == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Data Fasilitas Baru Berhasil Di Hapus.');
		}else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Data Fasilitas Baru Gagal Di Hapus.');
		}

        redirect('private/ruangan/fasilitas/' . $fsl[0]->id_ruangan);
	}

    public function fasilitas_update($id)
	{
        $data = array(
            'id_ruangan' => $this->input->post('id_ruangan'),
            'no_bed' => $this->input->post('bed'),
            'kondisi' => $this->input->post('kondisi'),
        );

		$add = $this->M_ruangan->NewBed($data);

		if ($add == true) {
			$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahkan Data Bed.');
		} else {
			$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahkan Data Bed.');
		}
		redirect('private/ruangan/bed/'.$id);
	}

	public function upload_foto($id)
	{
		$data['title'] = 'Upload Foto';
        $data['ruangan'] = $this->M_ruangan->ByIdRuangan($id); 
        $data['foto'] = $this->M_ruangan->BedByRuangan($id); 
		$this->load->view('template/private/header', $data);
		$this->load->view('template/private/navbar', $data);
		$this->load->view('template/private/sidebar', $data);
		$this->load->view('private/data-ruangan/foto', $data);
		$this->load->view('template/private/footer', $data);
	}

	public function new_foto($id)
	{
		$upload_path = './uploads/ruangan/';

        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|png|jpeg|gif|';
        $config['max_size'] = 4096; 
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $response['error'] = true;
            $response['message'] = $this->upload->display_errors();
        } else {
            $nama_foto  = $this->upload->data('file_name');

            $data = [
                'photo' => $nama_foto
            ];

            $result = $this->M_ruangan->updateDatasRuangan($id,$data);

            if ($result == TRUE) {
				$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Berhasil Menambahkan Data Gambar Ruangan.');
			} else {
				$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Gagal Menambahkan Data Gambar Ruangan.');
			}

			redirect('private/ruangan');
        }
	}
}
