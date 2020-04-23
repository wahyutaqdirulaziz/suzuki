<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php 
class Dashboard_controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //$this->load->model();
    $this->load->model('Auth_model');
    if($this->Auth_model->isNotLogin()) redirect(site_url('Auth'));
  }
  public function dashboard(){
    $data['title']='Dashboard';
		$this->load->view('admin/contents/dashboard',$data);
  }
}