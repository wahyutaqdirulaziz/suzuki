<?php


class Auth extends CI_Controller{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
      
    }
    

    public function index(){
        if($this->input->post()){
            if($this->Auth_model->doLogin()) redirect(site_url('dashboard'));
        }
        $this->load->view('admin/Auth');
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('Auth'));
    }


}