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
}
