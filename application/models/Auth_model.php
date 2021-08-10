<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{

    public function outlet()
    {
        $query = $this->db->get('store');
        return $query->result();
    }

    public function menu_makanan()
    {
        $query = $this->db->get('menu');
        return $query->result();
    }

    public function pembayaran()
    {
        $query = $this->db->get('reservasi');
        return $query->result();
    }
    
}
