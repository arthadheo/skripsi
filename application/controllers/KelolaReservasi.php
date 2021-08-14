<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaReservasi extends CI_Controller {

	public function index()
	{
        $s['title'] = 'Kelola Reservasi';
        $this->load->view('template_admin/header', $s);
		$this->load->view('webadmin/kelolareservasi');
        $this->load->view('template_admin/footer');
	}
}
