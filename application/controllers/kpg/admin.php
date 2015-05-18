<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author notebook
 */
class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }
    
    function index() {
            $session_data = $this->session->userdata('logged_in');
            $data['nama'] = $session_data['nama'];
            $data['username'] = $session_data['username'];
            $data['email'] = $session_data['email'];
            $this->load->view('kpg', $data);
    }
    
    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        $this->load->view('index');
    }
}