<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }

    function index() {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username');
        $this->form_validation->set_rules('password', 'Password', 'callback_check_database');

        if ($this->form_validation->run() == TRUE) {
                redirect('admin', 'refresh');
        } else {
            //Go to private area
            $this->load->view('login');		
        }
    }

    function check_database($password) {
        //Field validation succeeded. Validate against database
        $user = $this->input->post('username');

        //query the database
        $result = $this->user->login($user, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id_user,
                    'nama' => $row->nama,
                    'username' => $user,
                    'email' => $row->email,
                    'jenis_user' => $row->jenis_user
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Anda Bukan Admin GEMA');
            return false;
        }
        
    }

}