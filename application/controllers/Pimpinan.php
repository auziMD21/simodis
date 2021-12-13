\<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06/06/2018
 * Time: 22.40
 */
class Pimpinan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Admin_model');
        $this->load->model('Pimpinan_model');
    }
    public function index(){
        $this->load->view('pimpinan/index');
    }
    public function home()
    {
        $total = $this->Admin_model->total()->result();
        $sendiri = $this->Admin_model->individu()->result();
        $kelompok = $this->Admin_model->kelompok()->result();
        $data['pembaca'] = $total;
        $data['individu'] = $sendiri;
        $data['kel'] = $kelompok;
        $this->load->view('pimpinan/header_pimpinan');
        $this->load->view('pimpinan/home',$data);
    }
    public function laporan(){
        $this->load->view('pimpinan/header_pimpinan');
        $this->load->view('pimpinan/laporan');
    }
    public function pimpinanLogin(){
        $this->Pimpinan_model->getAdmin();
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('pimpinan');
    }
}