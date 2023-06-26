<?php

class UserModel extends CI_Model
{
	public function AllUser()
	{
		return $this->db->select('id_user,nama_user, tempat_lahir, tgl_lahir, no_hp, email')->from('tbl_user')->get()->result();
	}

	public function NewUser($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_user',$data);

			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function NewRegist($datas)
	{
		if (!empty($datas)) {
			$this->db->insert('tbl_pendaftaran',$datas);

			return true;
		}else{
			return false;
		}
	}
}