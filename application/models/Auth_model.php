<?php

class Auth_model extends CI_Model
{
    // private $_table = "users";

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
              
               return false;
           }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

}