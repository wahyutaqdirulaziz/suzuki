<?php

// defined('BASEPATH') OR exit('No direct script access allowed');

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
        // $user = $this->User_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($user->rules());

        // if ($validation->run()) {
        //     $user->add_user();
        //     $this->session->set_flashdata('message', 'registrasi anda berhasil');
        //     redirect('Auth');
        // }else {
        //     # code...
            $this->load->view("admin/registerasi");
        

       
    }

  
}