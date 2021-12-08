<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tugas extends Model
{
    public function tampil()
    {
        return $this->db->table('tugas t')
        // ->join('tugas_anggota a', 'a.Id_tugas = t.Id_tugas')
        ->orderBy('t.Id_tugas', 'DESC')
        ->get()
        ->getResultArray();
    }

    public function detail($Id_tugas)
    {
        return $this->db->table('tugas t')
        ->join('tugas_anggota a', 'a.Id_tugas = t.Id_tugas')
        ->where('t.Id_tugas', $Id_tugas)
        ->get()
        ->getResultArray();
    }
}