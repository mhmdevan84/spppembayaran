<?php
class Transaksi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Transaksi');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Transaksi";
        $data['transaksi'] = $this->M_Transaksi->data_transaksi();
        $this->template->load_admin('index','transaksi',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $data['title'] = "Data Transaksi";
        $data['subtitle'] = "Tambah Data Transaksi";
        $this->template->load_admin('index','transaksi_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
        redirect('login');
        }

        $this->M_Transaksi->simpan();
        redirect('transaksi');
    }

}