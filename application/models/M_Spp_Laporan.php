<?php
class M_Spp_Laporan extends CI_Model {
    function data_spp_laporan(){
        $query = $this->db->query("select * from spp");
        return $query;
    }

    function data_spp_laporan_by_id($id){
        $query = $this->db->query("select*from spp where nisn = '$id'");
        return $query;
    }
}