<?php
class Petugas_Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Petugas_Laporan');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Laporan Data Petugas";
        $data['petugas_laporan'] = $this->M_Petugas_Laporan->data_petugas_laporan();
        $this->template->load_admin('index','petugas_laporan',$data);
    }
}