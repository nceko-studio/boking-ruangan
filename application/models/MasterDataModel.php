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
}