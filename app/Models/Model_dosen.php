<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_dosen extends Model
{
    public function tampil()
    {
        return $this->db->table('dosen')
        ->join('prodi', 'prodi.Id_prodi = dosen.Id_prodi', 'left')
        ->join('Golongan', 'Golongan.Id_gol = dosen.Gol', 'left')
        ->orderBy('dosen.Id_dosen', 'DESC')
        ->get()
        ->getResultArray();
    }

    public function tampil_prodi()
    {
        return $this->db->table('prodi')
        ->get()
        ->getResultArray();
    }

    public function tampil_gol()
    {
        return $this->db->table('golongan')
        ->get()
        ->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('dosen')->insert($data);
    }
}