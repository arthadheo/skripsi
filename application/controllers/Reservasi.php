<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Reservasi Mangsi';
		$this->load->view('template/header', $data);
		$this->load->view('ReservasiSite');
        $this->load->view('template/footer');
	}


}