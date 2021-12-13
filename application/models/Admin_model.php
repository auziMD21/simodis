<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 29/06/2018
 * Time: 13.14
 */
class Admin_model extends CI_Model
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

        $query = $this->db->get_where('login', array('username' => $username, 'pass' => $password));
        $data = $query->row_array();
        $row = $query->num_rows();

        if ($row == 1) {
            $dataSession = [
                'username' => $data['username'],
                'loginAdmin' => TRUE
            ];

            $this->session->set_userdata($dataSession);

            redirect(base_url() . 'admin/home');
        } else {
            echo "<script>alert('Username/password salah'); window.location.href='.'</script>";

        }
    }

    public function total () {
        $query = $this->db->query('SELECT COUNT(*) as total FROM pembaca');
        return $query;
    }

    public function individu(){
        $query = $this->db->query("SELECT tipe, COUNT(tipe) as jumlah FROM pembaca LEFT JOIN (kelompok) on pembaca.idkel=kelompok.idkel WHERE tipe = 'individu' GROUP BY tipe");
        return $query;
    }

    public function kelompok(){
        $query = $this->db->query("SELECT tipe, COUNT(tipe) as jumlah FROM pembaca LEFT JOIN (kelompok) on pembaca.idkel=kelompok.idkel WHERE tipe = 'kelompok' GROUP BY tipe");
        return $query;
    }

    public function tampil(){
        $query = $this->db->query("SELECT * FROM pembaca left join (kelompok, kategori) on pembaca.idkel=kelompok.idkel AND kelompok.idkat=kategori.idkat ORDER BY namakat DESC ");
        return $query;
    }
    public function tampilcorp(){
        $query = $this->db->query("SELECT * FROM pembaca left join (kelompok, kategori) on pembaca.idkel=kelompok.idkel AND kelompok.idkat=kategori.idkat WHERE kelompok.idkat='COR'  ORDER BY namakat");
        return $query;
    }
    public function tampildinas(){
        $query = $this->db->query("SELECT * FROM pembaca left join (kelompok, kategori) on pembaca.idkel=kelompok.idkel AND kelompok.idkat=kategori.idkat WHERE kelompok.idkat='DP'  ORDER BY namakat");
        return $query;
    }
    public function tampilindividu(){
        $query = $this->db->query("SELECT * FROM pembaca left join (kelompok, kategori) on pembaca.idkel=kelompok.idkel AND kelompok.idkat=kategori.idkat WHERE kelompok.idkat='IND'  ORDER BY namakat");
        return $query;
    }
    public function tampilinstansi(){
        $query = $this->db->query("SELECT * FROM pembaca left join (kelompok, kategori) on pembaca.idkel=kelompok.idkel AND kelompok.idkat=kategori.idkat WHERE kelompok.idkat='IN'  ORDER BY namakat");
        return $query;
    }public function tampilpendidikan(){
    $query = $this->db->query("SELECT * FROM pembaca left join (kelompok, kategori) on pembaca.idkel=kelompok.idkel AND kelompok.idkat=kategori.idkat WHERE kelompok.idkat='PENDIK'  ORDER BY namakat");
    return $query;
}
public function getPemohonkelompok(){
        $this->db->where('idkat !=','IND');
        $this->db->order_by('idkel','desc');
        return $this->db->get('kelompok')->result_array();
}public function getPemohonindividu(){
        $this->db->where('idkel',2);
        $this->db->order_by('idpem','desc');
        return $this->db->get('pembaca')->result_array();
    }
public function updatestatus($id,$jenis){
    $data = [
        'status' => $jenis
    ];
    $this->db->where('idkel',$id);
    $this->db->update('kelompok',$data);
    return true;
}
    public function updatestatuspembaca($id,$jenis)
    {
        $data = [
            'status' => $jenis
        ];
        $this->db->where('idpem', $id);
        $this->db->update('pembaca', $data);
        return true;
    }
    public function detailpembaca($id){
        $query = $this->db->query("SELECT * FROM pembaca left join (kelompok, kategori) on pembaca.idkel=kelompok.idkel AND kelompok.idkat=kategori.idkat  WHERE Idpem=$id ")->row_array();
        return $query;
    }
}