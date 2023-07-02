<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
    {
        $data['title'] = 'Informasi Ruangan';
        $data['lantai'] = $this->MasterData->AllLantai();
        $data['ruangan'] = $this->M_ruangan->AllRuangan();
        $data['info_ruangan'] = $this->M_ruangan->getRuangan();
        $this->load->view('public/home_view/index', $data);
    }

    public function fetch_lantai($id)
    {

    }
}
