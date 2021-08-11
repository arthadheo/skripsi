<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaPelanggan extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Kelola Pelanggan';
        $this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/kelolapelanggan');
        $this->load->view('template_admin/footer');
	}
}
