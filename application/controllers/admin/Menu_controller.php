<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class Dashboard_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("menu/Menu_model");
  }
  public function dashboard()
  {
    $data['page_name'] = 'Menu';
    $this->load->view('admin/contents/menus/menu', $data);
  }
}
