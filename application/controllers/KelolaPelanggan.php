<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaPelanggan extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->helper('url');

    }

	public function index()
	{
        

        $this->form_validation->set_rules('nama_pelanggan', 'Name', 'required|trim');
        $this->form_validation->set_rules('email_pelanggan', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email_pelanggan]',[
            'is_unique' => 'Email ini sudah terpakai'
        ]);
        $this->form_validation->set_rules('katasandi_pelanggan', 'Password', 'required|trim|min_length[6]|matches[katasandi_pelanggan2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('katasandi_pelanggan2', 'Password', 'required|trim|matches[katasandi_pelanggan]');
        $this->form_validation->set_rules('nomor_telepon_pelanggan', 'Mobile Number', 'required|trim|is_unique[pelanggan.nomor_telepon_pelanggan]');
         
        if($this->form_validation->run() == false) {
            $s['title'] = 'Kelola Pelanggan';
            $data['pelanggan'] = $this->Auth_model->pelanggan();

            $this->load->view('template_admin/header', $s);
            $this->load->view('webadmin/kelolapelanggan', $data);
            $this->load->view('template_admin/footer');
        }else{
            $data = [
                'nama_pelanggan' => htmlspecialchars($this->input->post('nama_pelanggan', true)),
                'email_pelanggan' => htmlspecialchars($this->input->post('email_pelanggan', true)),
                'katasandi_pelanggan' => password_hash($this->input->post('katasandi_pelanggan'), PASSWORD_DEFAULT),
                'nomor_telepon_pelanggan' => $this->input->post('nomor_telepon_pelanggan'),
                'alamat_pelanggan' => $this->input->post('alamat_pelanggan'),
                'point_pelanggan' => $this->input->post('point_pelanggan'),
                'Birthdate' => $this->input->post('Birthdate'),
                'image' => 'default.jpg'
            ];

            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Pelanggan Baru telah didaftarkan!</div>');
            redirect('KelolaPelanggan');
	    }
    }

    public function deletepelanggan($id_pelanggan)
    {
        $data = array(
            'id_pelanggan' => $id_pelanggan
        );
        $this->Auth_model->deletepelanggan($data);
        redirect('KelolaPelanggan');
    }
}