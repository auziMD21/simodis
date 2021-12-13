<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 29/06/2018
 * Time: 14.16
 */
class Pimpinan_model extends CI_Model
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

            redirect(base_url() . 'pimpinan/home');
        }
        else {
            redirect(base_url() . 'pimpinan');
        }
    }

}