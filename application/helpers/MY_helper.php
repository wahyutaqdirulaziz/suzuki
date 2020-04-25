<?php
function upload_gambar($DIR, $field_name, $max_size, $encrypt = true, $default_image)
{
  $config['upload_path'] = $DIR;
  $config['encrypt_name'] = $encrypt;
  $config['file_name'] = date('Ymdhis') . $_FILES['' . $field_name . '']['name'];
  $config['allowed_types'] = 'jpg|png|jpeg|JPG|JPEG';
  $config['overwrite'] = true;
  $config['max_size'] = $max_size; /*500KB*/
  $this->load->library("upload", $config);
  if ($this->upload->do_upload("logo")) {
    return $this->upload->data("file_name");
  } else {
    $this->session->set_flashdata("danger", $this->upload->display_errors());
    return $default_image;
  }
}

function hapus_gambar($file_name){
  if ($file_name != "default.png") {
    $filename = explode(".", $file_name)[0];
    return array_map('unlink', glob(FCPATH . "img/logo/" . $filename . ".*"));
  }
}