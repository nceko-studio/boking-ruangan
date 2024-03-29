<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
    {
        $data['title'] = 'Home';
        $data['lantai'] = $this->MasterData->AllLantai();
        $data['ruangan'] = $this->M_ruangan->AllRuangan();
        $this->load->view('public/home_view/home', $data);
        // echo "HOME";
    }

    public function profile()
    {
        $data['title'] = 'Profil';
        $data['lantai'] = $this->MasterData->AllLantai();
        $data['ruangan'] = $this->M_ruangan->AllRuangan();
        $data['user'] = $this->UserModel->AllPegawai(); 
        $this->load->view('public/home_view/profile', $data);
        // echo "PROFILE";
    }

    public function info_ruangan()
    {
        $data['title'] = 'Informasi Ruangan';
        $data['lantai'] = $this->MasterData->AllLantai();
        $data['ruangan'] = $this->M_ruangan->AllRuangan();
        $this->load->view('public/home_view/info_ruangan', $data);
    }


    public function fetch_lantai()
    {
        $id = $this->input->post('id');
        $data = $this->M_ruangan->getRuangan($id);

        $result = array(
			'data' => $data
		);

		echo json_encode($result);
    }

    public function detail_ruangan($id)
    {
        $data = $this->M_ruangan->getRuanganDetail($id);

        $result = array(
			'data' => $data
		);

		echo json_encode($result);
    }

    public function detail_fasilitas($id)
    {
        $data = $this->M_ruangan->getRuanganFasilitas($id);

        $result = array(
			'data' => $data
		);

		echo json_encode($result);
    }
}
