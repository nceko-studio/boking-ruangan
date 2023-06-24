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

	// Start Gedung
	public function AllGedung()
	{
		return $this->db->get('tbl_gedung')->result();
	}

	function NewGedung($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_gedung',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteGedung($id)
	{
		if (!empty($id)) {
			$this->db->where('id_gedung',$id);
			$this->db->delete('tbl_gedung');

			return true;
		}else{
			return false;
		}
	}

	// End Gedung

	// Start Lantai

	public function AllLantai()
	{
		return $this->db->get('tbl_lantai')->result();
	}

	function NewLantai($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_lantai',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteLantai($id)
	{
		if (!empty($id)) {
			$this->db->where('id_lantai',$id);
			$this->db->delete('tbl_lantai');

			return true;
		}else{
			return false;
		}
	}

	// End Lantai

	// Start Jenis Ruangan

	public function AllJR()
	{
		return $this->db->get('tbl_jenis_ruangan')->result();
	}

	function NewJR($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_jenis_ruangan',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteJR($id)
	{
		if (!empty($id)) {
			$this->db->where('id_jenis_ruangan',$id);
			$this->db->delete('tbl_jenis_ruangan');

			return true;
		}else{
			return false;
		}
	}

	// End Jenis Ruangan

	// Start Group Ruangan

	public function AllGR()
	{
		return $this->db->select('a.*,b.jenis_ruangan')
		->from('tbl_group_ruangan a')
		->join('tbl_jenis_ruangan b', 'a.id_jenis_ruangan = b.id_jenis_ruangan','left')
		->get()
		->result();
	}

	function NewGR($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_group_ruangan',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteGR($id)
	{
		if (!empty($id)) {
			$this->db->where('id_group_ruangan',$id);
			$this->db->delete('tbl_group_ruangan');

			return true;
		}else{
			return false;
		}
	}

	// End Group Ruangan

	// Start Kelas Rawatan
	public function AllKR()
	{
		return $this->db->get('tbl_kelas_rawatan')->result();
	}

	function NewKR($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_kelas_rawatan',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteKR($id)
	{
		if (!empty($id)) {
			$this->db->where('id_kelas_rawatan',$id);
			$this->db->delete('tbl_kelas_rawatan');

			return true;
		}else{
			return false;
		}
	}

	// End Kelas Rawatan

	// Start Kelompok Ruangan

	public function AllKelRu()
	{
		return $this->db->get('tbl_kelompok_ruangan')->result();
	}

	function NewKelRu($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_kelompok_ruangan',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteKelRu($id)
	{
		if (!empty($id)) {
			$this->db->where('id_kelompok_ruangan',$id);
			$this->db->delete('tbl_kelompok_ruangan');

			return true;
		}else{
			return false;
		}
	}

	// End Kelompok Ruangan
}