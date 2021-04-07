<?php
class M_Petugas_Laporan extends CI_Model {
    function data_petugas_laporan(){
        $query = $this->db->query("select * from petugas");
        return $query;
    }

    function data_petugas_laporan_by_id($id){
        $query = $this->db->query("select*from petugas where nisn = '$id'");
        return $query;
    }
}