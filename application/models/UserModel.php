<?php

class UserModel extends CI_Model
{
	public function AllUser()
	{
		return $this->db->select('id_user,nama_user, tempat_lahir, tgl_lahir, no_hp, email')->from('tbl_user')->where_not_in('sts_group',"2")->get()->result();
	}
	public function AllUserDaftar()
	{
		return $this->db->select('a.*, b.*, rb.no_bed, r.nama_ruangan, func_nama_lengkap(b1.gelar_depan,b1.nama_user,b1.gelar_blk) as nama_dokter')
		->from('tbl_pendaftaran a')
		->join('tbl_user b','a.id_pasien=b.id_user', 'left')
		->join('tbl_ruangan_bed rb','a.id_ruangan_bed=rb.id_ruangan_bed', 'left')
		->join('tbl_ruangan r','rb.id_ruangan=r.id_ruangan', 'left')
		->join('tbl_user b1','a.id_dokter=b1.id_user', 'left')
		->where('is_cancled','0')
		->where('sts_selesai','0')
		->get()
		->result();
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

	public function AllPegawai()
	{
		return $this->db->select('func_nama_lengkap(gelar_depan,nama_user,gelar_blk) as nama_pegawai, IF(kd_dpjp = 1, "-", kd_dpjp) as kd_dpjp_fungsi, tbl_user.*')
		->from('tbl_user')
		->where('sts_group',"2")
		->get()
		->result();
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

	public function PendaftaranUpdate($no_register, $data)
	{
		if (!empty($data)) {
			$this->db->where('no_register', $no_register);
			$this->db->update('tbl_pendaftaran',$data);

			return true;
		}else{
			return false;
		}
	}

	public function UserDaftarByNoreg($no_register)
	{
		return $this->db->select('a.*, b.*, rb.no_bed, r.nama_ruangan, func_nama_lengkap(b1.gelar_depan,b1.nama_user,b1.gelar_blk) as nama_dokter')
		->from('tbl_pendaftaran a')
		->join('tbl_user b','a.id_pasien=b.id_user', 'left')
		->join('tbl_ruangan_bed rb','a.id_ruangan_bed=rb.id_ruangan_bed', 'left')
		->join('tbl_ruangan r','rb.id_ruangan=r.id_ruangan', 'left')
		->join('tbl_user b1','a.id_dokter=b1.id_user', 'left')
		->where('a.no_register',$no_register)
		->get()
		->row();
	}

	public function DataPerawat($no_register)
	{
		return $this->db->select('a.*, func_nama_lengkap(pr.gelar_depan,pr.nama_user,pr.gelar_blk) as nama_perawat')
		->from('tbl_pendaftaran_detail_perawat a')
		->join('tbl_user pr','a.id_perawat = pr.id_user','left')
		->where('a.no_register',$no_register)
		->get()
		->result();
	}

	public function PerawatInsert($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_pendaftaran_detail_perawat',$data);

			return true;
		}else{
			return false;
		}
	}
}