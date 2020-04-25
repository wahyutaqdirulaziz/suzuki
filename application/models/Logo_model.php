<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Logo_model  extends CI_Model
{
  private $table = "logo";
  public $id_logo;
  public $logo;
  public $alt;
  
  private function upload_image()
  {
    $imgDir = './img/logo/';
    $config['upload_path'] = $imgDir;
    $config['encrypt_name'] = TRUE;
    $config['file_name'] = date('Ymdhis') . $_FILES['logo']['name'];
    $config['allowed_types'] = 'jpg|png|jpeg|JPG|JPEG';
    $config['overwrite'] = TRUE;
    $config['max_size'] = 500; /*500KB*/
    $this->load->library("upload", $config);
    if ($this->upload->do_upload("logo")) {
      return $this->upload->data("file_name");
    } else {
      $this->session->set_flashdata("danger", $this->upload->display_errors());
      return "default.png";
    }
  }
  private function delete_image($id_logo)
  {
    //ambil nama image dari user untuk menghapus gambar
    $logo = $this->satu_logo($id_logo);
    if ($logo->logo != "default.png") {
      $filename = explode(".", $logo->logo)[0];
      return array_map('unlink', glob(FCPATH . "img/logo/" . $filename . ".*"));
    }
  }
  public function tambah_logo()
  {
    $this->id_logo = "";
    $this->logo = $this->upload_image();
    $this->alt = $this->input->post("alt", TRUE);
    $this->db->trans_start();
    $this->db->insert($this->table, $this);
    if ($this->db->trans_status() === TRUE) {
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
  public function semua_logo()
  {
    return $this->db->get($this->table)->result();
  }
  public function satu_logo($id_logo)
  {
    return $this->db->get_where($this->table, ["id_logo" => $id_logo])->row();
  }
  public function hapus_logo($id_logo)
  {
    $this->delete_image($id_logo);
    $this->db->trans_start();
    $this->db->delete($this->table, ["id_logo" => $id_logo]);
    if ($this->db->trans_status() === TRUE) {
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
}
