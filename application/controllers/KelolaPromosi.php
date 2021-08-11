<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaPromosi extends CI_Controller {

	public function index()
	{
        $s['title'] = 'Kelola Promosi';
		$data['promo'] = $this->Auth_model->promo();
        $this->load->view('template_admin/header', $s);
		$this->load->view('webadmin/kelolapromosi', $data);
        $this->load->view('template_admin/footer');
	}
}
