<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User_data_model extends CI_Model{
  private $table = "user_data";
  public $id_user_data;
  public $id_user;
  public $ip;
  public $city;
  public $datetime;

  public function add_user_data(){
    $this->id_user_data = "";
    $this->id_user = $this->input->post("id_user", TRUE);
    $this->ip = $this->input->user_agent->id_address();
    $this->city = $this->input->post("city", TRUE);
    $this->db->trans_start();
    $this->db->input($this->table, $this);
    if($this->db->trans_status() === TRUE){
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
  public function get_all_user_data(){
    return $this->db->get($this->table)->result();
  }
  public function count_user_data(){
    return $this->db->get($this->table)->num_rows();
  }
}
?>