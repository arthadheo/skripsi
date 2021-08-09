<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->helper('url');

    }

	public function index()
	{
		$a['title'] = 'Reservasi Mangsi';
		$data['store'] = $this->Auth_model->outlet();

		$this->load->view('template/header', $a);
		$this->load->view('ReservasiSite', $data);
        $this->load->view('template/footer');
	}
}