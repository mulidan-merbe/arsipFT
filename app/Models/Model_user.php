<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_user extends Model
{
    public function tampil()
    {
        return $this->db->table('user')
        ->join('dep', 'dep.Id_dep = user.Id_dep', 'left')
        ->orderBy('user.Id', 'DESC')
        ->get()
        ->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function tampilbyId($data)
    {
        return $this->db->table('user')
        ->join('dep', 'dep.Id_dep = user.Id_dep', 'left')
        ->where('user.Id', $data['Id'])
        ->get()
        ->getRowArray();
    }

    public function ubah($data)
    {
        $this->db->table('user')
        ->where('Id', $data['Id'])
        ->update($data);
    }

    public function hapus($data)
    {
        $this->db->table('user')
        ->where('Id',  $data['Id'])
        ->delete($data);
    }
}