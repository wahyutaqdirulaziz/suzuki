<?php defined('BASEPATH') or exit('No direct script access allowed');
class Produk_controller extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model("Produk_model");
  }
  public function form_tambah_produk(){
    $data['request'] = 'tambah_produk';
    $data['page_name'] = 'produk';
    $this->load->view('admin/contents/produk/form-produk', $data);
  }
  public function proses_tambah_produk(){
    $validate = $this->form_validation;
    $validate->set_rules($this->Produk_model->rules());
    if($validate->run()){
      $result = $this->Produk_model->add_produk();
      if($result === TRUE) {
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/data/produk');
      }
    }
    $this->session->set_flashdata('danger', 'Gagal disimpan');
    redirect('admin/tambah/produk');
  }
  public function data_produk(){
    $data['produk'] = $this->Produk_model->data_produk();
    $this->load->view('admin/contents/produk/produk', $data);
  }
  public function __destruct(){
    $this->db->close();
  }
}
?>