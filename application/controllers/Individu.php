\<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 06/06/2018
 * Time: 22.40
 */
class Individu extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Individu_model');
    }
    public function index(){
        $this->load->view('individu/index');
    }
    public function daftarbaru(){
        $this->load->view('individu/daftar');
    }
    public function home(){
        $data['data']=$this->Individu_model->getProfildata();
        $this->load->view('individu/header_individu',$data);
        $this->load->view('individu/home',$data);
    }
    public function profil(){
        $data['data']=$this->Individu_model->getProfildata();
        $this->load->view('individu/header_individu',$data);
        $this->load->view('individu/profil',$data);
    }
    public function histori(){
        $data['data']=$this->Individu_model->getProfildata();
        $this->load->view('individu/header_individu',$data);
        $this->load->view('individu/histori',$data);
    }
    public function pralogin(){
        $this->load->view('individu/pralogin');
    }
    public function individuLogin(){
        $this->Individu_model->getAdmin();
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('individu');
    }
    public function Registbaru(){
        if($this->Individu_model->insertpembaca()){
            redirect('individu/pralogin');

        }else{
            $this->load->library('upload');
            var_dump($this->upload->display_errors());
            exit();
        }
    }
    public function berhenti($id){
        $data['data']=$this->Individu_model->berhentiberlangganan($id);
        redirect('individu');
    }
}