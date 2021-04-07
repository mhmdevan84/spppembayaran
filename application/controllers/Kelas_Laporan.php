<?php
class Kelas_Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Kelas_Laporan');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Laporan Data Kelas";
        $data['kelas_laporan'] = $this->M_Kelas_Laporan->data_kelas_laporan();
        $this->template->load_admin('index','kelas_laporan',$data);
    }
}