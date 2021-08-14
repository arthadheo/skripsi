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

    public function promo()
    {
        $query = $this->db->get('promo');
        return $query->result();
    }

    public function pelanggan()
    {
        $query = $this->db->get('pelanggan');
        return $query->result();
    }

    
    public function delete($data)
    {
        $this->db->where('id_store', $data['id_store']);
        $this->db->delete('store', $data);
    }
    

    public function deletepelanggan($data)
    {
        $this->db->where('id_pelanggan', $data['id_pelanggan']);
        $this->db->deletepelanggan('pelanggan', $data);
    }
    
    // public function edit_store($id_store, $store)
    // {
    //     return $this->db->get_where($id_store, $store);
    // }

    // public function update_store($id_store,$data,$store)
    // {
    //     $this->db->where($id_store);
    //     $this->db->update($store,$data);
    // }
}
