<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeSite extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->helper('url');

    }

	public function index()
	{
		$s['title'] = 'Home Mangsi';
		$data['store'] = $this->Auth_model->outlet();
		$data['promo'] = $this->Auth_model->promo();

        $this->load->view('template/header', $s);
		$this->load->view('WelcomeSite', $data);
        $this->load->view('template/footer');
	}


}
