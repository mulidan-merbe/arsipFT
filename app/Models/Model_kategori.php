<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_kategori extends Model
{
    public function tampil()
    {
        return $this->db->table('ketegori')
        ->orderBy('Id', 'DESC')
        ->get()
        ->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('ketegori')->insert($data);
    }

    public function ubah($data)
    {
        $this->db->table('ketegori')
        ->where('Id', $data['Id'])
        ->update($data);
    }

    public function hapus($data)
    {
        $this->db->table('ketegori')
        ->where('Id',  $data['Id'])
        ->delete($data);
    }
}