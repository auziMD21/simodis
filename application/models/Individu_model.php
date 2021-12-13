<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 29/06/2018
 * Time: 14.16
 */
class Individu_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
    }
    public function getAdmin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->get_where('pembaca', array('username' => $username, 'pass' => $password,'idkel' => '2'));
        $data = $query->row_array();
        $row = $query->num_rows();

        if ($row == 1) {
            $status = $data['status'];
            if($status == 1){
            $dataSession = [
                'Idpem' => $data['Idpem'],
                'username' => $data['username'],
                'loginAdmin' => TRUE
            ];

            $this->session->set_userdata($dataSession);

            redirect(base_url() . 'individu/home');
        }else if($status == 0){
                echo "<script>alert('Akun belum di konfirmasi. Mohon tunggu!');";
                echo "history.back();</script>";
            }
        }
        else {
            echo "<script>alert('Username/password salah'); window.location.href='.'</script>";
        }
    }
    public function insertpembaca(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namalengkapinstans = $this->input->post('nama');
        $jenis = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $tgl = $this->input->post('tgl');
        $nomorop = $this->input->post('nohp');
        $pekerjaan = $this->input->post('pekerjaan');

        if(!empty($_FILES['ktp']['name'])) {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|pdf';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('ktp')) {
                $fileInfo = $this->upload->data();


                $data = array(
                    'username' => $username,
                    'pass' => $password,
                    'namapem' => $namalengkapinstans,
                    'jenis_kelamin' => $jenis,
                    'alamatpem' => $alamat,
                    'tgllahir' => $tgl,
                    'Nomor_Hp' => $nomorop,
                    'pekerjaan' => $pekerjaan,
                    'status' => 0,
                    'idkel' => 2,
                    'fotokartuidentitas' => 'upload/'.$fileInfo['file_name']

                );

                $this->db->insert('pembaca', $data);

                return true;
            }

            return false;
        }

    }

    public function getProfilData(){
        //ambil data session admin kelompok
        $sesiprofil=$this->session->userdata('Idpem');
        $this->db->join('kelompok','pembaca.idkel=kelompok.idkel');
        return $this->db->get_where('pembaca',['Idpem'=>$sesiprofil])->row_array();
    }
    public function berhentiberlangganan($id){
        $this->db->where('Idpem',$id);
        $this->db->delete('pembaca');

    }
}