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

  public function tambah_produk(){
    $this->id_produk = "";
    $this->nama_produk = ucwords($this->input->post("nama_produk", TRUE));
    $this->tag_line = ucwords($this->input->post("tag_line", TRUE));
    $this->fitur_produk = ucwords($this->input->post("fitur_produk", TRUE));
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
  public function ubah_produk(){
    $d = $this->db;
    $this->id_produk = $this->input->post("id_produk", TRUE);
    $this->nama_produk = ucwords($this->input->post("nama_produk", TRUE));
    $this->tag_line = ucwords($this->input->post("tag_line", TRUE));
    $this->fitur_produk = ucwords($this->input->post("fitur_produk", TRUE));
    $d->trans_start();
    $d->update($this->table, $this, ["id_produk"=>$this->id_produk]);
    if ($d->trans_status() === TRUE) {
      $d->trans_commit();
      return TRUE;
    } else {
      $d->trans_rollback();
      return FALSE;
    }
  }
  public function semua_produk(){
    return $this->db->get($this->table)->result();
  }
  public function satu_produk($id_produk){
    return $this->db->get_where($this->table, ['id_produk'=>$id_produk])->row();
  }
  public function hapus_produk($id_produk){
    $d = $this->db;
    $d->trans_start();
    $d->delete($this->table, ["id_produk" =>$id_produk]);
    if ($d->trans_status() === TRUE) {
      $d->trans_commit();
      return TRUE;
    } else {
      $d->trans_rollback();
      return FALSE;
    }
  }
}