/*@CONTROLL MENU KE PUBLIC*/
/*Menu transaction with database, creat and read menu table*/
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class Menu_model extends CI_Model {
  private $table = "menu";
  public $id_menu;
  public $menu;
  public $icon;
  public function add_menu(){
    $this->id_menu = "";
    $this->menu = $this->input->post("menu", TRUE);
    $this->icon = $this->input->post("icon", TRUE);
    $this->db->trans_start();
    $this->db->insert($this->table, $this);
    if($this->db->trans_status() === TRUE) {
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
  public function read_all_menu(){
    return $this->db->get($this->table)->result();
  }
  public function read_one_menu($id_menu){
    return $this->db->get_where($this->table, ["id_menu"=>$id_menu])->row();
  }
  public function update_menu(){
    $this->id_menu = $this->input->post("id_menu", TRUE);
    $this->menu = $this->input->post("menu", TRUE);
    $this->icon = $this->input->post("icon", TRUE);
    $this->db->trans_start();
    $this->db->update($this->table, ["menu"=>$this->menu, "icon"=>$this->icon], ["id_menu"=>$this->id_menu]);
    if ($this->db->trans_status() === TRUE) {
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
  public function delete_menu($id_menu){
    $this->db->trans_start();
    $this->db->delete($this->table, ["id_menu" => $id_menu]);
    if ($this->db->trans_status() === TRUE) {
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
}
