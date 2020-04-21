<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class User_model extends CI_Model {
  private $table = "users";
  public $id_user;
  public $nama;
  public $email;
  public $no_hp;
  public $image;
  public $password;
  public $is_active;
  public $role_id;
  //public $datetime = date("Y-m-d H:i:s");

  private function upload_image(){
    $imgDir = './img/users/';
    $config['upload_path'] = $imgDir;
    $config['encrypt_name'] = TRUE;
    $config['file_name'] = date('Ymdhis') . $_FILES['user_images']['name'];
    $config['allowed_types'] = 'jpg|png|jpeg|JPG|JPEG';
    $config['overwrite'] = TRUE;
    $config['max_size'] = 1024; /*1MB*/
    $this->load->library("upload", $config);
    if ($this->upload->do_upload("user_images")) {
      return $this->upload->data("file_name");
    } else {
      $this->session->set_flashdata("danger", $this->upload->display_errors());
      return "default.png";
    }
  }
  private function delete_image($id_user){
    //ambil nama image dari user untuk menghapus gambar
    $user = $this->get_one_user($id_user);
    if ($user->image != "default.png") {
      $filename = explode(".", $user->image)[0];
      return array_map('unlink', glob(FCPATH . "image/user/" . $filename . ".*"));
    }
  }
  public function add_user(){
    $this->nama = ucwords($this->input->post("nama", TRUE));
    $this->email = $this->input->post("email", TRUE);
    $this->no_hp = $this->input->post("no_hp", TRUE);
    $this->image = $this->upload_image();
    $this->password = password_hash($this->input->post("password", TRUE), PASSWORD_BCRYPT);
    $this->is_active = "0";
    $this->role_id = $this->input->post("role_id", TRUE);
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
  public function get_one_user($id_user){
    return $this->db->get_where($this->table, ["id_user"=>$id_user])->row();
  }
  public function get_all_user(){
    return $this->db->get($this->table)->result();
  }
  public function update_user(){
    $this->id_user = $this->input->post("id_user", TRUE);
    $this->nama = ucwords($this->input->post("nama", TRUE));
    $this->email = $this->input->post("email", TRUE);
    $this->no_hp = $this->input->post("no_hp", TRUE);
    $this->password = $this->input->post("password", TRUE);
    $this->role_id = $this->input->post("role_id", TRUE);
    //cek apakah saat merubah data user melakukan upload gambar
    if(!empty($_FILES['user_images']['name'])) {
      //jika iya, maka lakukan upload gambar ulang
      $this->delete_image($this->id_user);
      $this->image = $this->upload_image();
    } else {
      $this->image = $this->input->post("old_gambar_produk", TRUE);
    }
    $this->db->trans_start();
    $this->db->update($this->table, $this, ["id_user"=>$this->id_user]);
    if ($this->db->trans_status() === TRUE) {
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
  public function delete_user($id_user){
    $this->db->trans_start();
    $this->db->delete($this->table, ["id_user"=>$id_user]);
    if($this->db->trans_status() === TRUE){
      $this->delete_image($id_user);
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
}