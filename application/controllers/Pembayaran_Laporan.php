<?php
class Pembayaran_Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Pembayaran_Laporan');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Laporan Data Pembayaran";
        $data['pembayaran_laporan'] = $this->M_Pembayaran_Laporan->data_pembayaran_laporan();
        $this->template->load_admin('index','pembayaran_laporan',$data);
    }
}