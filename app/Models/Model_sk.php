<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_sk extends Model
{
    public function tampil()
    {
        return $this->db->table('surat_keputusan')
        ->orderBy('Id_sk', 'DESC')
        ->get()
        ->getResultArray();
    }

    public function getbyId($Id_sk)
    {
        return $this->db->table('surat_keputusan')
        ->where('Id_sk', $Id_sk)
        ->get()
        ->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('surat_keputusan')->insert($data);
    }

    public function ubah($data)
    {
        $this->db->table('surat_keputusan')
        ->where('Id_sk', $data['Id_sk'])
        ->update($data);
    }

    public function hapus($data)
    {
        $this->db->table('surat_keputusan')
        ->where('Id_sk',  $data['Id_sk'])
        ->delete($data);
    }
}