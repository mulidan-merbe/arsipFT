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

    public function tampil_pendukung()
    {
        return $this->db->table('tendik_pendukung ')
        ->orderBy('Id_pendukung', 'ASC')
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

    public function tambah_tendik_pendukung($data)
    {
        $this->db->table('tendik_pendukung')->insert($data);
    }

    public function ubah_tendik_pns($data)
    {
        
        $this->db->table('tendik_pns')
        ->where('Id_pns', $data['Id_pns'])
        ->update($data);
    }

    public function ubah_tendik_honorer($data)
    {
        $this->db->table('tendik_honorer')
        ->where('Id_honorer', $data['Id_honorer'])
        ->update($data);
    }

    public function ubah_tendik_pendukung($data)
    {
        $this->db->table('tendik_pendukung')
        ->where('Id_pendukung', $data['Id_pendukung'])
        ->update($data);
    }

    public function hapusPns($data)
    {
        $this->db->table('tendik_pns')
        ->where('Id_pns',  $data['Id_pns'])
        ->delete($data);

    }

    public function hapusHonorer($data)
    {
        $this->db->table('tendik_honorer')
        ->where('Id_honorer',  $data['Id_honorer'])
        ->delete($data);

    }

    public function hapusPendukung($data)
    {
        $this->db->table('tendik_pendukung')
        ->where('Id_pendukung',  $data['Id_pendukung'])
        ->delete($data);

    }

}