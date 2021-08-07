<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

    public function login()
	{
        $this->form_validation->set_rules('email_pelanggan', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('katasandi_pelanggan', 'Password', 'trim|required');

        if($this->form_validation->run() == false){
            $data['title'] = 'Login Mangsi';
		    $this->load->view('LoginSite');
        }else{
            $this->_proseslogin();
        }
	}

    private function _proseslogin(){
        $email = $this->input->post('email_pelanggan');
        $password = $this->input->post('katasandi_pelanggan');

        $pelanggan = $this->db->get_where('pelanggan', ['email_pelanggan' => $email])->row_array();
        if($pelanggan) {
            if(password_verify($password, $pelanggan['katasandi_pelanggan'])) {
                $data = [
                    'email' => $pelanggan['email_pelanggan']
                ];
                $this->session->set_userdata($pelanggan);
                redirect('pelanggan');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah </div>');
                redirect('auth/login');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar </div>');
            redirect('auth/login');
        }
    }

    public function registrasi()
	{
        $this->form_validation->set_rules('nama_pelanggan', 'Name', 'required|trim');
        $this->form_validation->set_rules('email_pelanggan', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email_pelanggan]',[
            'is_unique' => 'Email ini sudah terpakai'
        ]);
        $this->form_validation->set_rules('katasandi_pelanggan', 'Password', 'required|trim|min_length[6]|matches[katasandi_pelanggan2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('katasandi_pelanggan2', 'Password', 'required|trim|matches[katasandi_pelanggan]');
        $this->form_validation->set_rules('nomor_telepon_pelanggan', 'Mobile Number', 'required|trim|regex_match[/^[0-9]{10}$/]|is_unique[pelanggan.nomor_telepon_pelanggan]');
         
        if($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Mangsi';
            $this->load->view('RegistrasiSite');
        }else{
            $data = [
                'nama_pelanggan' => htmlspecialchars($this->input->post('nama_pelanggan', true)),
                'email_pelanggan' => htmlspecialchars($this->input->post('email_pelanggan', true)),
                'katasandi_pelanggan' => password_hash($this->input->post('katasandi_pelanggan'), PASSWORD_DEFAULT),
                'gender_pelanggan' => $this->input->post('gender_pelanggan'),
                'nomor_telepon_pelanggan' => $this->input->post('nomor_telepon_pelanggan'),
                'alamat_pelanggan' => $this->input->post('alamat_pelanggan'),
                'point_pelanggan' => 0,
                'Birthdate' => $this->input->post('Birthdate'),
                'image' => 'default.jpg'
            ];

            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat akun anda telah terdaftar, silahkan login</div>');
            redirect('auth/login');
           
        }
		
	}

    public function logout()
    {
        $this->session->unset_userdata('email_pelanggan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Akun telah logout</div>');
        redirect('auth/login');

    }
}