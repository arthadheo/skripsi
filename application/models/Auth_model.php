<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{

    public function outlet()
    {
        $query = $this->db->get('store');
        return $query->result();
    }
    
}
