<?php
class M_Pembayaran_Laporan extends CI_Model {
    function data_pembayaran_laporan(){
        $query = $this->db->query("select * from pembayaran");
        return $query;
    }

    function data_pembayaran_laporan_by_id($id){
        $query = $this->db->query("select * from pembayaran where nisn = '$id'");
        return $query;
    }
}