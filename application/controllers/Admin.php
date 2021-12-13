\<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06/06/2018
 * Time: 22.40
 */
class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Admin_model');

    }
    public function index(){
        $this->load->view('admin/index');
    }
    public function document(){
        $total = $this->Admin_model->total()->result();
        $sendiri = $this->Admin_model->individu()->result();
        $kelompok = $this->Admin_model->kelompok()->result();
        $data['pembaca'] = $total;
        $data['individu'] = $sendiri;
        $data['kel'] = $kelompok;
        $this->load->view('admin/lap',$data);
    }
    public function home(){
        $total = $this->Admin_model->total()->result();
        $sendiri = $this->Admin_model->individu()->result();
        $kelompok = $this->Admin_model->kelompok()->result();
        $data['pembaca'] = $total;
        $data['individu'] = $sendiri;
        $data['kel'] = $kelompok;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/home',$data);
    }
    public function pembaca(){
        $tampil = $this->Admin_model->tampil()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pembaca', $data);
    }
    public function tambahpembaca(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/frompendaftaran');
    }
    public function corpose(){
        $tampil = $this->Admin_model->tampilcorp()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/corpose',$data);
    }
    public function individu(){
        $tampil = $this->Admin_model->tampilindividu()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/individu',$data);
    }
    public function dinas(){
        $tampil = $this->Admin_model->tampildinas()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/dinas',$data);
    }
    public function pendidikan(){
        $tampil = $this->Admin_model->tampilpendidikan()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pendidikan',$data);
    }
    public function instansi(){
        $tampil = $this->Admin_model->tampilinstansi()->result();
        $data['tampil'] = $tampil;
        $this->load->view('admin/header_admin');
        $this->load->view('admin/instansi',$data);
    }
    public function logout(){
    $this->session->sess_destroy();
    redirect('admin');
}
    public function histori(){
        $data['data'] = $this->Admin_model->getPemohonkelompok();
    $this->load->view('admin/header_admin');
    $this->load->view('admin/histori',$data);
}
    public function historipembaca(){
        $data['data'] = $this->Admin_model->getPemohonindividu();
        $this->load->view('admin/header_admin');
        $this->load->view('admin/historipembaca',$data);
    }
    public function laporan(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/laporan');
    }
    public function adminLogin(){
        $this->Admin_model->getAdmin();
    }
    public function updateStatus($id,$jenis){
        if($this->Admin_model->updatestatus($id,$jenis)){
            redirect('admin/histori');
        }
    }
    public function updateStatuspembaca($id,$jenis)
    {
        if ($this->Admin_model->updatestatuspembaca($id, $jenis)) {
            redirect('admin/historipembaca');
        }
    }
    public function lihat($id){
        $data['data']=$this->Admin_model->detailpembaca($id);
        $this->load->view('admin/header_admin');
        $this->load->view('admin/detailpembaca',$data);
    }
}