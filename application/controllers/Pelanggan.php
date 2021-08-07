<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		// $data['pelanggan'] = $this->db->get_where('pelanggan',['email_pelanggan' => $this->session->userdata('email_pelanggan')])->row_array();
        // echo 'hello ' . $data['pelanggan']['nama_pelanggan'];

		$data['title'] = 'Profile Pelanggan';
		$this->load->view('template/header', $data);
		$this->load->view('ProfileSite');
        $this->load->view('template/footer');
	}
}
