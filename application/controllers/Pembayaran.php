<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->helper('url');

    }

	public function index()
	{
        $data['reservasi'] = $this->Auth_model->pembayaran();

		$this->load->view('PembayaranSite');
	}

	public function do_upload()
        {
            $bukti_pembayaran = $_FILES['bukti_pembayaran'];
            if ($bukti_pembayaran=''){

            }else{
                $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'PNG|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('bukti_pembayaran'))
                {
                    echo "Upload Gagal"; die();
                }else {
                    $bukti_pembayaran = $this->upload->data('file_name');

                    $data = array(
                        'bukti_pembayaran' => $bukti_pembayaran
                    );
                    $this->db->insert('pembayaran', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Bukti pembayaran berhasil di upload!</div>');
                    redirect('WelcomeSite');
                }
            }
 
        }
}