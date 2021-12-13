<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 29/06/2018
 * Time: 14.15
 */
class Kelompok_Model extends CI_Model
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

        $query = $this->db->get_where('kelompok', array('username' => $username, 'pass' => $password));
        $data = $query->row_array();
        $row = $query->num_rows();

        if ($row == 1) {
            $status = $data['status'];

            if($status == 1){
                $dataSession = [
                    'username' => $data['username'],
                    'loginAdmin' => TRUE,
                    'idkel' => $data['idkel']
                ];

                $this->session->set_userdata($dataSession);

                redirect(base_url() . 'kelompok/home');
            }else if($status == 0){
                echo "<script>alert('Akun belum di konfirmasi. Mohon tunggu!');";
                echo "history.back();</script>";
            }

        }
        else {
            echo "<script>alert('Username/password salah '); window.location.href='.'</script>";

        }
    }

    public function getJumlahPembaca(){
        //ambil data session admin kelompok
        $sesiLogin = $this->session->userdata('idkel');

        $this->db->select('COUNT(Idpem) AS totalPembaca');
        return $this->db->get_where('pembaca',['idkel' => $sesiLogin])->row_array();
    }

    public function getPembaca(){
        //ambil data session admin kelompok
        $sesiLogin = $this->session->userdata('idkel');

        //select pembaca berdasarkan admin kelompok
        return $this->db->get_where('pembaca',['idkel' => $sesiLogin])->result_array();
    }

    public function getProfilData(){
        //ambil data session admin kelompok
        $sesiprofil=$this->session->userdata('idkel');
        $this->db->join('kategori','kategori.idkat=kelompok.idkat');
        return $this->db->get_where('kelompok',['idkel'=>$sesiprofil])->row_array();
    }

    public function insertPembaca()
    {
        //data yang dikirim
        $sesi=$this->session->userdata('idkel');
        $namalengkapinstans = $this->input->post('nama');
        $jenis = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $tgl = $this->input->post('tgl');
        $nomorop = $this->input->post('nohp');
        $pekerjaan = $this->input->post('pekerjaan');


        $data = array(
            'username' => 'nulll',
            'pass' => 'null',
            'namapem' => $namalengkapinstans,
            'jenis_kelamin' => $jenis,
            'alamatpem' => $alamat,
            'tgllahir' => $tgl,
            'Nomor_Hp' => $nomorop,
            'pekerjaan'=>$pekerjaan,
            'idkel'=>$sesi

        );

        $this->db->insert('pembaca', $data);

        return true;
    }


    public function insert(){
        //data yang dikirim
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namalengkapinstans= $this->input->post('namali');
        $jenis=$this->input->post('jenisins');
        $alamat=$this->input->post('alamat');
        $tgl=$this->input->post('tanggalberdiri');
        $nomorop=$this->input->post('nomorof');
        $kategori=$this->input->post('kategori');

        if(!empty($_FILES['documenpendukung']['name'])){
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'jpg|png|pdf';
            $config['max_size'] = 2048;

            $this->load->library('upload',$config);

            if($this->upload->do_upload('documenpendukung')){
                $fileInfo = $this->upload->data();

                $data = array(
                    'username' => $username,
                    'pass' => $password,
                    'namakel'=>$namalengkapinstans,
                    'jeniskel'=>$jenis,
                    'alamatkel'=>$alamat,
                    'tglber'=>$tgl,
                    'nomorhp'=>$nomorop,
                    'tipe'=>'kelompok',
                    'idkat'=>$kategori,
                    'status'=>0,
                    'documenpendukung' => 'upload/'.$fileInfo['file_name'],

                );

                $this->db->insert('kelompok',$data);

                return true;
            }

            return false;
        }

    }
    public function hapuspembaca($id){
        $this->db->where('Idpem', $id);
        $this->db->delete('pembaca');
    }
    public function detailpembaca($id){
         return $this->db->get_where('pembaca',['Idpem'=>$id])->row_array();
    }
    public function pralogin1(){
        
    }
}