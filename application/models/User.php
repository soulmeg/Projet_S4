<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{


    public function checkLogin($email,$password){
        $this->load->database();
        $sql = $this->db->select('*')
                        ->from('user')
                        ->where('email',$email)
                        ->where('password',$password)
                        ->get();
        if($sql->num_rows() > 0){
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        else return null;
    }


}
