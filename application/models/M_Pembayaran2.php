<?php
class M_Pembayaran extends CI_Model {
    function data_pembayaran(){
        $query = $this->db->query("select * from pembayaran");
        return $query;
    }

    function simpan(){
        $data = array('id_pembayaran' => $this->input->post('id_pembayaran'),
                'nisn' => ($this->input->post('nisn')),
                'id_petugas' => ($this->input->post('id_petugas')),
                'nama_siswa' => ($this->input->post('nama_siswa')),
                'tgl_bayar' => ($this->input->post('tgl_bayar')),
                'id_spp' => ($this->input->post('id_spp')),
                'nominal' => $this->input->post('nominal'));
        $insert = $this->db->insert('pembayaran',$data);
    }

    function data_pembayaran_by_id($id){
        $query = $this->db->query("select * from pembayaran where id_pembayaran = '$id'");
        return $query;
    }

    function hapus_data_pembayaran($id){
            $query = $this->db->query("delete from pembayaran where id_pembayaran = '$id'");

            if ($query > 0){
                $this->session->set_flashdata('suksessimpan','Data Pembayaran Berhasil Dihapus');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Pembayaran Gagal Dihapus');
        }
    }

}