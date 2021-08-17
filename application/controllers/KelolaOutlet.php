<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaOutlet extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->helper('url');

    }

	public function index()
	{
        $this->form_validation->set_rules('nama_store', 'Name', 'required|trim');
        $this->form_validation->set_rules('lokasi_store', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('kuota', 'Kuota', 'required|trim');

        if($this->form_validation->run() == false){
            $s['title'] = 'Kelola Outlet';
		    $data['store'] = $this->Auth_model->outlet();

            $this->load->view('template_admin/header', $s);
            $this->load->view('webadmin/kelolaoutlet', $data);
            $this->load->view('template_admin/footer');
        }else {
            $data = [
                'nama_store' => ($this->input->post('nama_store', true)),
                'lokasi_store' => ($this->input->post('lokasi_store', true)),
                'nomor_telepon_restoran' => ($this->input->post('nomor_telepon_restoran', true)),
                'kuota' => ($this->input->post('kuota', true)),
                'id_store' => ($this->input->post('id_store', true))
            ];

            $this->db->insert('store', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Pelanggan berhasil didaftarkan!</div>');
            redirect('KelolaOutlet');
        }
	}

    public function delete($id_store)
    {
        $data = array(
            'id_store' => $id_store
        );
        $this->Auth_model->delete($data);
        redirect('KelolaOutlet');
    }

    public function edit_store($id_store)
    {
        $this->Auth_model->edit_data_store($id_store);
        redirect('KelolaOutlet');
    }

    // public function update()
    // {
    //     $nama_store = $this->input->post('nama_store');
    //     $id_store = $this->input->post('id_store');
    //     $lokasi_store = $this->input->post('lokasi_store');
    //     $nomor_telepon_restoran = $this->input->post('nomor_telepon_restoran');
    //     $kuota = $this->input->post('kuota');

    //     $data = array(
    //         'nama_store' => $nama_store,
    //         'id_store' => $id_store,
    //         'lokasi_store' => $lokasi_store,
    //         'nomor_telepon_restoran' => $nomor_telepon_restoran,
    //         'kuota' => $kuota
    //     );

    //     $id_store = array(
    //         'id_store' => $id_store
    //     );

    //     $this->Auth_model->update_store($id_store,$data,'store');
    //     redirect('KelolaOutlet');
    // }
}
