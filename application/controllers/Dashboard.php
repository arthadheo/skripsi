<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');

    }
    
	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('template_admin/header', $data);
		$this->load->view('webadmin/dashboard');
        $this->load->view('template_admin/footer');
	}
}