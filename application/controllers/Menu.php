<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->helper('url');

    }

	public function index()
	{
        $s['title'] = 'Menu Mangsi';
		$data['menu'] = $this->Auth_model->menu_makanan();

		$this->load->view('template/header', $s);
		$this->load->view('MenuSite', $data);
        $this->load->view('template/footer');
	}
}
