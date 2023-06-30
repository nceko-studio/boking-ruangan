<?php

class PegawaiModel extends CI_Model
{
	public function AllPegawai()
	{
		return $this->db->select('func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_pegawai, IF(kd_dpjp = 1, "-", kd_dpjp) as kd_dpjp_fungsi, tbl_user.*')
		->from('tbl_user')
		->where('sts_group',"2")
		->get()
		->result();
	}

	public function AllAkun()
	{
		return $this->db->select('a.id_akun,a.username,a.is_active,b.role,a.date_created,func_nama_lengkap(u.gelar_depan,u.nama_user,gelar_blk) as nama_lengkap')
		->from('tbl_akun a')
		->join('tbl_mst_role b', 'a.sts_akun = b.id_role','left')
		->join('tbl_user u', 'a.id_user = u.id_user','left')
		->get()
		->result();
	}

	function NewAkun($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_akun',$data);

			return true;
		}else{
			return false;
		}
	}

	function DeleteAkun($id)
	{
		if (!empty($id)) {
			$this->db->where('id_akun',$id);
			$this->db->delete('tbl_akun');

			return true;
		}else{
			return false;
		}
	}

	function UpdateAkun($id, $data)
	{
		if (!empty($id)) {
			$this->db->where('id_akun', $id);
			$this->db->update('tbl_akun', $data);

			return true;
		}else{
			return false;
		}
	}

	
}