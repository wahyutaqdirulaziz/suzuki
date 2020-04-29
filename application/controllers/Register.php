<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
            $this->load->view("admin/registerasi");    
    }
    public function proses_registrasi()
    {
        $this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]',[
            'valid_email' => 'masukan email yang valid'
        ]);
        $this->form_validation->set_rules('no_hp','No_hp','required',[
            'required' => 'no nama anda'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        if($this->form_validation->run() == FALSE){
           
            redirect('Register');
         } else {
        $this->User_model->add_user();
            $this->session->set_flashdata('message', 'Registrasi berhasil silahkan Login');
            redirect('Auth');
      }
    }

  
}