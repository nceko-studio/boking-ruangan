<?php

class RuanganModel extends CI_Model
{
    public function getRuangan($lantai)
    {
        $query = $this->db->query("
								SELECT
									r.*,
									b.*,
									k.*,
									g.*,
									kr.*,
									l.*,
									gd.*,
									CASE
										WHEN SUM(b.sts_bed = '1') > 0 THEN 'Tersedia'
										ELSE 'Tidak Tersedia'
									END AS sts_ruangan,
									GROUP_CONCAT(
									CONCAT(
										CONCAT('No. Bed - ', b.no_bed, ': '),
										CASE
										WHEN b.sts_bed = '1' THEN 'Tersedia'
										ELSE 'Terpakai'
										END
									)
									ORDER BY b.no_bed
									SEPARATOR '<br />'
									) AS status_bed
								FROM tbl_ruangan r
								LEFT JOIN tbl_ruangan_bed b ON r.id_ruangan = b.id_ruangan
								LEFT JOIN tbl_kelompok_ruangan k ON r.id_kelompok_ruangan = k.id_kelompok_ruangan
								LEFT JOIN tbl_group_ruangan g ON r.id_group_ruangan = g.id_group_ruangan
								LEFT JOIN tbl_kelas_rawatan kr ON r.id_kelas_rawatan = kr.id_kelas_rawatan
								LEFT JOIN tbl_lantai l ON r.id_lantai = l.id_lantai
								LEFT JOIN tbl_gedung gd ON r.id_gedung = gd.id_gedung
								WHERE r.id_lantai = ".$lantai."
								GROUP BY r.nama_ruangan
					");

					$result = $query->result_array();

		return $result;
    }
    public function getRuanganDetail($lantai)
    {
        $query = $this->db->query("
								SELECT
									r.*,
									b.*,
									k.*,
									g.*,
									kr.*,
									l.*,
									gd.*,
									CASE
										WHEN SUM(b.sts_bed = '1') > 0 THEN 'Tersedia'
										ELSE 'Tidak Tersedia'
									END AS sts_ruangan,
									GROUP_CONCAT(
									CONCAT(
										CONCAT('No. Bed - ', b.no_bed, ': '),
										CASE
										WHEN b.sts_bed = '1' THEN 'Tersedia'
										ELSE 'Terpakai'
										END
									)
									ORDER BY b.no_bed
									SEPARATOR '\n'
									) AS status_bed
								FROM tbl_ruangan r
								LEFT JOIN tbl_ruangan_bed b ON r.id_ruangan = b.id_ruangan
								LEFT JOIN tbl_kelompok_ruangan k ON r.id_kelompok_ruangan = k.id_kelompok_ruangan
								LEFT JOIN tbl_group_ruangan g ON r.id_group_ruangan = g.id_group_ruangan
								LEFT JOIN tbl_kelas_rawatan kr ON r.id_kelas_rawatan = kr.id_kelas_rawatan
								LEFT JOIN tbl_lantai l ON r.id_lantai = l.id_lantai
								LEFT JOIN tbl_gedung gd ON r.id_gedung = gd.id_gedung
								WHERE r.id_ruangan = ".$lantai."
					");

					$result = $query->row_array();

		return $result;
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

	function updateBedTesedia($id)
	{
		$data = array(
			'sts_bed' => '1'
		);

		if (!empty($id)) {
			$this->db->where('id_ruangan_bed', $id);
			$this->db->update('tbl_ruangan_bed', $data);

			return true;
		}else{
			return false;
		}
	}

	function updateBedKosong($id)
	{
		$data = array(
			'sts_bed' => '0'
		);

		if (!empty($id)) {
			$this->db->where('id_ruangan_bed', $id);
			$this->db->update('tbl_ruangan_bed', $data);

			return true;
		}else{
			return false;
		}
	}

	function getRuanganFasilitas($id) {
		$query = $this->db->query("SELECT * FROM tbl_fasilitas_ruanngan WHERE id_ruangan=" . $id);
		$result = $query->result();
		return $result;
	}

}
