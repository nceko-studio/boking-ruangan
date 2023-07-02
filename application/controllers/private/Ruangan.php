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
}
