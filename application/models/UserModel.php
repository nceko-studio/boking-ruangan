<?php

class UserModel extends CI_Model
{
	public function resetPass($id)
	{
		$data = array(
			'password'	=> md5('operator123')
		);
		$this->db->where('id_user', $id);
		$this->db->update('tbl_user',$data);

		return true;
	}
}