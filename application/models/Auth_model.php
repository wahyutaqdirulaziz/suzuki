<?php

class Auth_model extends CI_Model
{
       
    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $post["email"]);
        $this->db->join('role','role.id_role = users.role_id');
              
        $user = $this->db->get()->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya
            $isAdmin = $user->role_id == 1;
            $ismember = $user->role_id == 2;

            $is_active = $user->is_active == 1;
            // jika password benar dan dia admin
                if($is_active){
                if($isPasswordTrue && $isAdmin){ 
                    // login sukses yay!
                    $this->session->set_userdata([
                    'user_logged' => $user,
                    'role'=>$user->role
                    ]);
                    return true;
                }else if($isPasswordTrue && $ismember){
                    $this->session->set_userdata([
                        'user_logged' => $user,
                        'role'=>$user->role
                    ]);
                    return true;
                }
           }else{
            $this->session->set_flashdata('message', 'akun belum di activasi.');
               return false;
           }
        }else{
        
        // login gagal
        $this->session->set_flashdata('message', 'username atau password anda salah mohon di cek !');
        return false;
    }
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

  

}