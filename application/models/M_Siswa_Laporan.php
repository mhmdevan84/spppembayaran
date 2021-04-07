<?php
class M_Siswa_Laporan extends CI_Model {
    function data_siswa_laporan(){
        $query = $this->db->query("select * from siswa");
        return $query;
    }

    function data_siswa_laporan_by_id($id){
        $query = $this->db->query("select*from siswa where nisn = '$id'");
        return $query;
    }
}