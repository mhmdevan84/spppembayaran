<?php
class M_Transaksi extends CI_Model {
    function data_transaksi(){
        $query = $this->db->query("select * from transaksi");
        return $query;
    }

    function simpan(){
        $data = array('nama_siswa' => $this->input->post('nama_siswa'),
                'kelas' => $this->input->post('kelas'),
                'tgl_bayar' => $this->input->post('tgl_bayar'),
                'bulan_dibayar' => $this->input->post('bulan_dibayar'),
                'tahun_dibayar' => $this->input->post('tahun_dibayar'),
                'jumlah_bayar' => $this->input->post('jumlah_bayar'));
        $insert = $this->db->insert('transaksi',$data);
    }
}