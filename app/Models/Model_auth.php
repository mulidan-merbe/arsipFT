<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_auth extends Model
{
    public function login($Email, $Password)
    {
        return $this->db->table('user')->where([
            'Email' => $Email,
            'Password'  => $Password
        ])->get()->getRowArray();
    }

    public function cek_user($post)
    {
        return $this->db->table('user')->where([
            'Email' => $post['Email'],
        ])->get()->getRowArray();
    }
}