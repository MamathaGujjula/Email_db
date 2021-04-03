<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Registermodel extends CI_Model {
  // declare private variable
    
    public function createUser() {
        $data = array(
            'id' => $this->user_id,
            'email' => $this->user_email,
            'user_name' => $this->user_password,
            'password' => $this->confirm_password,
            'status' => $this->user_status,
        );
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
}
?>