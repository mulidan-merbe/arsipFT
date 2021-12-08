<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tugas_anggota extends Model
{
    public function tampil($Id_tugas)
    {
        return $this->db->table('tugas_anggota')
        ->where('Id_tugas', $Id_tugas)
        ->get()
        ->getResultArray();
    }
}