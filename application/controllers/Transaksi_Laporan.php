<?php
class transaksi_Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_transaksi_Laporan');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Laporan Data transaksi";
        $data['transaksi_laporan'] = $this->M_transaksi_Laporan->data_transaksi_laporan();
        $this->template->load_admin('index','transaksi_laporan',$data);
    }
}