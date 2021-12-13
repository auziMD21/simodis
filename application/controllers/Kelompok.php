\<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06/06/2018
 * Time: 22.40
 */
class Kelompok extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Kelompok_model');
    }
    public function index(){
        $this->load->view('kelompok/index');
    }
    public function kelompokLogin(){
        $this->Kelompok_model->getAdmin();
    }
    public function home(){
        $data['data'] = $this->Kelompok_model->getJumlahPembaca();
        $this->load->view('kelompok/header_kelompok');
        $this->load->view('kelompok/home',$data);
    }
    public function profil(){
        $data['data']=$this->Kelompok_model->getProfildata();
        $this->load->view('kelompok/header_kelompok');
        $this->load->view('kelompok/profil',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('kelompok');
    }
    public function pembaca(){
        $data['data'] = $this->Kelompok_model->getPembaca();
        $this->load->view('kelompok/header_kelompok');
        $this->load->view('kelompok/pembaca',$data);
    }
    public function tambahpembaca(){
        $this->load->view('kelompok/header_kelompok');
        $this->load->view('kelompok/frompendaftaran');
    }
    public function daftar(){
        $this->load->view('kelompok/daftarkelompok');
    }
    public function pralogin(){
        $this->load->view('kelompok/pralogin');
    }
    public  function kelompokRegist()
    {
        if($this->Kelompok_model->insert()){
            redirect('kelompok/pralogin');
        }else{
            print_r($this->upload->errors());
            exit();
        }
    }
    public  function tambahPem()
    {
        if($this->Kelompok_model->insertpembaca()){
            redirect('kelompok/pembaca');
        }else{
            print_r($this->upload->errors());
            exit();
        }
    }
    public function lihat($id){
        $data['data']=$this->Kelompok_model->detailpembaca($id);
        $this->load->view('kelompok/header_kelompok');
        $this->load->view('kelompok/detailpembaca',$data);
    }
    public function hapus($id){
        $data['data']=$this->Kelompok_model->hapuspembaca($id);
        redirect('kelompok/pembaca');
    }
}