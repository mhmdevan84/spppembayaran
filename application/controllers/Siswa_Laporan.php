<?php
class Siswa_Laporan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Siswa_Laporan');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Laporan Data Siswa";
        $data['siswa_laporan'] = $this->M_Siswa_Laporan->data_siswa_laporan();
        $this->template->load_admin('index','siswa_laporan',$data);
    }
}