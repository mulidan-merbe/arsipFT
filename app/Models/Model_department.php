<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_department extends Model
{
    public function tampil()
    {
        return $this->db->table('dep')
        ->orderBy('Id_dep', 'DESC')
        ->get()
        ->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('dep')->insert($data);
    }

    public function ubah($data)
    {
        $this->db->table('dep')
        ->where('Id_dep', $data['Id_dep'])
        ->update($data);
    }

    public function hapus($data)
    {
        $this->db->table('dep')
        ->where('Id_dep',  $data['Id_dep'])
        ->delete($data);
    }
}