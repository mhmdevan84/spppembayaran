<?php
class M_transaksi_Laporan extends CI_Model {
    function data_transaksi_laporan(){
        $query = $this->db->query("select * from transaksi");
        return $query;
    }

    function data_transaksi_laporan_by_id($id){
        $query = $this->db->query("select * from transaksi where nisn = '$id'");
        return $query;
    }
}