<?php

class MasterDataModel extends CI_Model
{
	// Start Jenjang Pendidikan

	public function AllJenjang()
	{
		return $this->db->get('tbl_jenjang_pendidikan')->result();
	}

	function NewJenjang($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_jenjang_pendidikan',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteJenjang($id)
	{
		if (!empty($id)) {
			$this->db->where('id_jenjang_pendidikan',$id);
			$this->db->delete('tbl_jenjang_pendidikan');

			return true;
		}else{
			return false;
		}
	}

	// End Jenjang Pendidikan

	// Start Jurusan Pendidikan

	public function AllJurusan()
	{
		return $this->db->select('a.*,b.jenjang_pendidikan')
		->from('tbl_jurusan_pendidikan a')
		->join('tbl_jenjang_pendidikan b', 'a.id_jenjang_pendidikan = b.id_jenjang_pendidikan','left')
		->get()
		->result();
	}

	function NewJurusan($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_jurusan_pendidikan',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteJurusan($id)
	{
		if (!empty($id)) {
			$this->db->where('id_jurusan_pendidikan',$id);
			$this->db->delete('tbl_jurusan_pendidikan');

			return true;
		}else{
			return false;
		}
	}

	// End Jurusan Pendidikan

	// Start Unit Kerja Pendidikan

	public function AllUK()
	{
		return $this->db->get('tbl_unit_kerja')->result();
	}

	function NewUK($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_unit_kerja',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteUK($id)
	{
		if (!empty($id)) {
			$this->db->where('id_unit_kerja',$id);
			$this->db->delete('tbl_unit_kerja');

			return true;
		}else{
			return false;
		}
	}

	// End Unit Kerja Pendidikan

	// Start Agama

	public function AllAgama()
	{
		return $this->db->get('tbl_agama')->result();
	}

	function NewAgama($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_agama',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteAgama($id)
	{
		if (!empty($id)) {
			$this->db->where('id_agama',$id);
			$this->db->delete('tbl_agama');

			return true;
		}else{
			return false;
		}
	}

	// End Agama

	// Start Identitas

	public function AllIdentitas()
	{
		return $this->db->get('tbl_identitas')->result();
	}

	function NewIdentitas($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_identitas',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteIdentitas($id)
	{
		if (!empty($id)) {
			$this->db->where('id_identitas',$id);
			$this->db->delete('tbl_identitas');

			return true;
		}else{
			return false;
		}
	}

	// End Identitas

	// Start Status Kawin
	public function AllSK()
	{
		return $this->db->get('tbl_status_kawin')->result();
	}

	function NewSK($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_status_kawin',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteSK($id)
	{
		if (!empty($id)) {
			$this->db->where('id_status_kawin',$id);
			$this->db->delete('tbl_status_kawin');

			return true;
		}else{
			return false;
		}
	}

	// End Status Kawin

	// Start Status Pegawai

	public function AllSP()
	{
		return $this->db->get('tbl_status_pegawai')->result();
	}

	function NewSP($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_status_pegawai',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteSP($id)
	{
		if (!empty($id)) {
			$this->db->where('id_status_pegawai',$id);
			$this->db->delete('tbl_status_pegawai');

			return true;
		}else{
			return false;
		}
	}

	// End Status Pegawai
}