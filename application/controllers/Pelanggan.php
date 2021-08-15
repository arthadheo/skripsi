<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->helper('url');

    }

	public function index()
	{
		if ($_SESSION['nama_pelanggan'] != null) {
			$data['title'] = 'Profile Pelanggan';
			$this->load->view('template/header', $data);
			$this->load->view('ProfileSite');
			$this->load->view('template/footer');
		}else{
			redirect('auth/login');
		}
	}
}
