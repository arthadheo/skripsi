<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaMenuMakanan extends CI_Controller {

	public function index()
	{
        $s['title'] = 'Kelola Menu Makanan';
		$data['menu'] = $this->Auth_model->menu_makanan();

        $this->load->view('template_admin/header', $s);
		$this->load->view('webadmin/kelolamenumakanan', $data);
        $this->load->view('template_admin/footer');
	}
}
