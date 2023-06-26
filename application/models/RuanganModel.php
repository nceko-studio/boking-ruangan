<?php

class RuanganModel extends CI_Model
{
    public function getRuangan()
    {
        $query = $this->db->query("SELECT * 
        FROM tbl_ruangan r 
        ,tbl_kelompok_ruangan k 
        ,tbl_lantai l 
        ,tbl_group_ruangan g 
        ,tbl_kelas_rawatan kr 
        ,tbl_gedung gd
        where r.id_kelompok_ruangan=k.id_kelompok_ruangan
        and r.id_lantai=l.id_lantai
        and g.id_group_ruangan=r.id_group_ruangan
        and r.id_kelas_rawatan=kr.id_kelas_rawatan
        and r.id_gedung=gd.id_gedung
        order by l.id_lantai,kr.id_kelas_rawatan")->result_array();

        return $query;
    }
    public function AllRuangan()
    {
        return $this->db->select('a.*,b.group_ruangan,c.kelas_rawatan,d.kelompok_ruangan,e.gedung,f.lantai, COUNT(rb.id_ruangan_bed) AS jumlah_bed')
		->from('tbl_ruangan a')
		->join('tbl_group_ruangan b', 'a.id_group_ruangan = b.id_group_ruangan','left')
		->join('tbl_kelas_rawatan c', 'a.id_kelas_rawatan = c.id_kelas_rawatan','left')
		->join('tbl_kelompok_ruangan d', 'a.id_kelompok_ruangan = d.id_kelompok_ruangan','left')
		->join('tbl_gedung e', 'a.id_gedung = e.id_gedung','left')
		->join('tbl_lantai f', 'a.id_lantai = f.id_lantai','left')
        ->join('tbl_ruangan_bed rb', 'a.id_ruangan = rb.id_ruangan AND rb.kondisi = "1"', 'left')
        ->group_by('a.id_ruangan')  
		->get()
		->result();
    }

    public function ByIdRuangan($id)
    {
        return $this->db->select('a.*,b.group_ruangan,c.kelas_rawatan,d.kelompok_ruangan,e.gedung,f.lantai')
		->from('tbl_ruangan a')
		->join('tbl_group_ruangan b', 'a.id_group_ruangan = b.id_group_ruangan','left')
		->join('tbl_kelas_rawatan c', 'a.id_kelas_rawatan = c.id_kelas_rawatan','left')
		->join('tbl_kelompok_ruangan d', 'a.id_kelompok_ruangan = d.id_kelompok_ruangan','left')
		->join('tbl_gedung e', 'a.id_gedung = e.id_gedung','left')
		->join('tbl_lantai f', 'a.id_lantai = f.id_lantai','left')
        ->where('a.id_ruangan',$id)
		->get()
		->row();
    }

    public function BedByRuangan($id)
    {
        return $this->db->select('a.*')
		->from('tbl_ruangan_bed a')
        ->where('a.id_ruangan',$id)
		->get()
		->result();
    }


    public function NewRuangan($data)
    {
        if (!empty($data)) {
			$this->db->insert('tbl_ruangan',$data);

			return $this->db->insert_id();
		}else{
			return false;
		}
    }

    function NewBed($data)
	{
		if (!empty($data)) {
			$this->db->insert('tbl_ruangan_bed',$data);

			return true;
		}else{
			return false;
		}
	}

    function NewFasil($datas)
	{
		if (!empty($datas)) {
			$this->db->insert('tbl_fasilitas_ruanngan',$datas);

			return true;
		}else{
			return false;
		}
	}

	function DeleteRuangan($id)
	{
		if (!empty($id)) {
			$this->db->where('id_ruangan',$id);
			$this->db->delete('tbl_ruangan');

			return true;
		}else{
			return false;
		}
	}

    function DeleteBed($id)
	{
		if (!empty($id)) {
			$this->db->where('id_ruangan_bed',$id);
			$this->db->delete('tbl_ruangan_bed');

			return true;
		}else{
			return false;
		}
	}


}
