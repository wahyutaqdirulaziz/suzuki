<?php defined('BASEPATH') or exit('No direct script access allowed');
class Produk_controller extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model("Produk_model");
  }
  public function data_produk(){
    $data['request'] = 'produk';
    $data['page_name'] = 'Data Produk';
    $data['produk'] = $this->Produk_model->semua_produk();
    $this->load->view('admin/contents/produk/produk', $data);
  }
  public function form_tambah_produk(){
    $data['request'] = 'produk';
    $data['page_name'] = 'Form Tambah Produk';
    $this->load->view('admin/contents/produk/form-tambah', $data);
  }
  public function proses_tambah_produk(){
    $validate = $this->form_validation;
    $validate->set_rules($this->Produk_model->rules());
    if($validate->run()){
      $result = $this->Produk_model->tambah_produk();
      if($result === TRUE) {
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/data/produk');
      } else {
        $this->session->set_flashdata('danger', 'Kesalahan Pada Database');
        redirect('admin/form/tambah/produk');
      }
    }
    $this->session->set_flashdata('danger', 'Validasi Gagal');
    redirect('admin/form/tambah/produk');
  }
  public function form_ubah_produk($id_produk){
    $data['request'] = 'produk';
    $data['page_name'] = 'Form Ubah Produk';
    $data['produk'] = $this->Produk_model->satu_produk($id_produk);
    $this->load->view('admin/contents/produk/form-ubah', $data);
  }
  public function proses_ubah_produk(){
    $validate = $this->form_validation;
    $validate->set_rules($this->Produk_model->rules());
    if ($validate->run()) {
      $result = $this->Produk_model->ubah_produk();
      if ($result === TRUE) {
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/data/produk');
      } else {
        $this->session->set_flashdata('danger', 'Kesalahan Pada Database');
        redirect('admin/form/tambah/produk');
      }
    } 
    $this->session->set_flashdata('danger', 'Validasi Gagal');
    redirect('admin/form/tambah/produk');
  }
  public function proses_hapus_produk($id_produk){
    $result = $this->Produk_model->hapus_produk($id_produk);
    if ($result === TRUE) {
      $this->session->set_flashdata('success', 'Berhasil dihapus');
      redirect('admin/data/produk');
    } else {
      $this->session->set_flashdata('danger', 'Kesalahan Pada Database');
      redirect('admin/data/produk');
    }
  }
  public function __destruct(){
    $this->db->close();
  }
}
?>