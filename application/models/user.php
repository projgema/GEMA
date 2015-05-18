<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author notebook
 */
class User extends CI_Model {
    //put your code here
    function login($user, $password) {
        $this->db->select('*');
        $this->db->from('user');
        //$this -> db -> join('customer_tbl c','c.id_pel = p.id_pel');
        $this->db->where('username = ' . "'" . $user . "'");
        $this->db->where('password = ' . "'" . $password . "'");
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
