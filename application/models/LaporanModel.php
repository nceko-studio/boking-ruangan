<?php

class LaporanModel extends CI_Model
{
	public function AllLaporan()
	{
        $query = "
                SELECT
				pd.no_register,	u.no_mr, u.alamat, pd.diagnosa_awal, u.jk,
                u.nama_user AS nama_user,
                pd.tgl_daftar AS tanggal_daftar,
                IF(pd.tgl_berobat IS NULL OR pd.tgl_berobat = '', '-', pd.tgl_berobat) AS tanggal_berobat,
                CASE
                    WHEN pd.sts_selesai = '0' THEN '-'
                    ELSE pd.tgl_selesai
                END AS tanggal_selesai,
                CASE
                    WHEN pd.is_cancled = '1' THEN 'Dibatalkan'
                    WHEN pd.sts_selesai = '1' THEN 'Selesai'
                    ELSE '-'
                END AS status,
                func_nama_lengkap(d.gelar_depan,d.nama_user,d.gelar_blk) AS nama_dokter,
                IF(COUNT(p.id_user) = 0, '-', REPLACE(GROUP_CONCAT(func_nama_lengkap(p.gelar_depan,p.nama_user,p.gelar_blk) SEPARATOR '<br/>'), ',', '<br/>')) AS nama_perawat
                FROM
                tbl_pendaftaran pd
                INNER JOIN tbl_user u ON pd.id_pasien = u.id_user
                LEFT JOIN tbl_user d ON pd.id_dokter = d.id_user
                LEFT JOIN tbl_pendaftaran_detail_perawat dp ON pd.no_register = dp.no_register
                LEFT JOIN tbl_user p ON dp.id_perawat = p.id_user
				WHERE pd.is_rujuk != '1' 
                GROUP BY
                pd.no_register
				ORDER BY
				pd.tgl_daftar DESC";

        return $this->db->query($query)->result();
	}

    public function AllLaporanById($user_id)
	{
        $query = "
                SELECT
                u.nama_user AS nama_user,
                pd.tgl_daftar AS tanggal_daftar, rb.no_bed, r.nama_ruangan,
                IF(pd.tgl_berobat IS NULL OR pd.tgl_berobat = '', '-', pd.tgl_berobat) AS tanggal_berobat,
                CASE
                    WHEN pd.sts_selesai = '0' THEN '-'
                    ELSE pd.tgl_selesai
                END AS tanggal_selesai,
                CASE
                    WHEN pd.is_cancled = '1' THEN 'Dibatalkan'
                    WHEN pd.sts_selesai = '1' THEN 'Selesai'
                    WHEN pd.is_rujuk = '1' THEN 'Di Rujuk'
                    ELSE '-'
                END AS status,
                func_nama_lengkap(d.gelar_depan,d.nama_user,d.gelar_blk) AS nama_dokter,
                IF(COUNT(p.id_user) = 0, '-', REPLACE(GROUP_CONCAT(func_nama_lengkap(p.gelar_depan,p.nama_user,p.gelar_blk) SEPARATOR '<br/>'), ',', '<br/>')) AS nama_perawat,
				CASE
                    WHEN pd.is_rujuk = '0' THEN '-'
                    ELSE pd.faskes_rujuk
                END AS ket_laporan
                FROM
                tbl_pendaftaran pd
                INNER JOIN tbl_user u ON pd.id_pasien = u.id_user
                LEFT JOIN tbl_user d ON pd.id_dokter = d.id_user
                LEFT JOIN tbl_pendaftaran_detail_perawat dp ON pd.no_register = dp.no_register
                LEFT JOIN tbl_user p ON dp.id_perawat = p.id_user
                LEFT JOIN tbl_ruangan_bed rb ON pd.id_ruangan_bed = rb.id_ruangan_bed
                LEFT JOIN tbl_ruangan r ON rb.id_ruangan = r.id_ruangan
                WHERE pd.id_pasien = ".$user_id."
                GROUP BY
                pd.no_register
				ORDER BY
				pd.tgl_daftar DESC";

        return $this->db->query($query)->result();
	}
}
