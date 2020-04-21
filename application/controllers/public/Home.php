<?php



class Home extends CI_Controller{

public function __construct()
{
    parent::__construct();
    //Do your magic here
}


public function index(){
    $this->load->view('frontend/utama');
}

public function register() {
    $this->load->view('frontend/login')
}
}