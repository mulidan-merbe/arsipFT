<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tujuan extends Model
{
    public function tampil()
    {
        return $this->db->table('tujuan')
        ->get()
        ->getResultArray();
    }
}