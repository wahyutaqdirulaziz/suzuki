<?php defined('BASEPATH') or exit('No direct script access allowed');
class Logo_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Logo_model");
  }
  public function data_logo()
  {
    $data['request'] = 'logo';
    $data['page_name'] = 'Data Logo';
    $data['logo'] = $this->Logo_model->semua_logo();
    $this->load->view('admin/contents/logo/logo', $data);
  }
  public function proses_tambah_logo()
  {
    $result = $this->Logo_model->tambah_logo();
    if ($result === TRUE) {
      $this->session->set_flashdata('success', 'Berhasil Disimpan');
      redirect('admin/data/logo');
    } else {
      $this->session->set_flashdata('danger', 'Kesalahan Pada Database');
      redirect('admin/data/logo');
    }
  }
  public function proses_hapus_logo($id_logo)
  {
    $result = $this->Logo_model->hapus_logo($id_logo);
    if ($result === TRUE) {
      $this->session->set_flashdata('success', 'Berhasil Dihapus');
      redirect('admin/data/logo');
    } else {
      $this->session->set_flashdata('danger', 'Kesalahan Pada Database');
      redirect('admin/data/logo');
    }
  }
  public function __destruct()
  {
    $this->db->close();
  }
}
