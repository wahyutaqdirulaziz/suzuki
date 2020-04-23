<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produk_model extends CI_Model {
  private $table = "produk";
  public $id_produk;
  public $nama_produk;
  public $tag_line;
  public $fitur_produk;

  public function rules(){
    return [
      [
        'field'=>'nama_produk',
        'rules'=>'required'
      ],
      [
        'field' => 'tag_line',
        'rules' => 'required'
      ],
      [
        'field' => 'fitur_produk',
        'rules' => 'required'
      ],
    ];
  }

  public function add_produk(){
    $this->id_produk = "";
    $this->nama_produk = $this->input->post("nama_produk", TRUE);
    $this->tag_line = $this->input->post("tag_line", TRUE);
    $this->fitur = $this->input->post("fitur_produk", TRUE);
    $this->db->trans_start();
    $this->db->insert($this->table, $this);
    if($this->db->trans_status() === TRUE){
      $this->db->trans_commit();
      return TRUE;
    } else {
      $this->db->trans_rollback();
      return FALSE;
    }
  }
  public function data_produk(){
    return $this->db->get($this->table)->result();
  }
}