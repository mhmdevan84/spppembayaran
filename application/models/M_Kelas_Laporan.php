<?php
class M_Kelas_Laporan extends CI_Model {
    function data_kelas_laporan(){
        $query = $this->db->query("select * from kelas");
        return $query;
    }

    function data_kelas_laporan_by_id($id){
        $query = $this->db->query("select*from kelas where nisn = '$id'");
        return $query;
    }
}