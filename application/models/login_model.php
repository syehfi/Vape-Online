<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login_model extends CI_Model {
    
        function login($username, $password){
            $this->db->select('id_user, username, password, level');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->limit(1);
            
            $query = $this->db->get();
            if ($query->num_rows()==1)
            {
                return $query->result();
            } else{
                return false;
            }
        }
        
        function login_admin($username, $password){
            $this->db->from('admin');
            $this->db->select('id_admin, username, password, level');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->limit(1);
            
            $query = $this->db->get();
            if ($query->num_rows()==1)
            {
                return $query->result();
            } else{
                return false;
            }
        }
    
    }
    
    /* End of file login_model.php */