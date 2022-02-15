<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tendik extends Model
{
    public function tampil_pns()
    {
        return $this->db->table('tendik_pns t')
        ->join('golongan g', 'g.Id_gol=t.Id_gol')
        ->orderBy('t.Id_pns', 'ASC')
        ->get()
        ->getResultArray();
    }

    public function tampil_honorer()
    {
        return $this->db->table('tendik_honorer ')
        ->orderBy('Id_honorer', 'ASC')
        ->get()
        ->getResultArray();
    }

    public function tampilbyid_pns($Id_pns)
    {
        return $this->db->table('tendik_pns t')
        ->join('golongan g', 'g.Id_gol=t.Id_gol')
        ->where('t.Id_pns', $Id_pns)
        ->get()
        ->getResultArray();
    }

    public function tambah_tendik_pns($data)
    {
        $this->db->table('tendik_pns')->insert($data);
    }

    public function tambah_tendik_honorer($data)
    {
        $this->db->table('tendik_honorer')->insert($data);
    }

    public function ubah_tendik_pns($data)
    {
        
        $this->db->table('tendik_pns')
        ->where('Id_pns', $data['Id_pns'])
        ->update($data);
    }

}