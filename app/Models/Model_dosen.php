<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_dosen extends Model
{
    public function tampil()
    {
        return $this->db->table('dosen d')
        // ->select('d.Id_dosen, d.NIP, d.Nama, d.JK, d.Agama, g.Id_gol, g.golongan, d.Jab, d.Jnj, d.NIDN, p.Id_prodi, p.prodi,  COUNT(s.NIP) AS total')
        ->join('prodi p', 'p.Id_prodi = d.Id_prodi', 'left')
        ->join('Golongan g', 'g.Id_gol = d.Gol', 'left')
        // ->join('sertifikat_dosen s', 's.NIP = d.NIP', 'left')
        ->orderBy('d.Id_dosen', 'ASC')
        ->get()
        ->getResultArray();

    }

    public function tampil_prodi()
    {
        return $this->db->table('prodi')
        ->get()
        ->getResultArray();
    }

    public function tampil_sertifikat()
    {
        return $this->db->table('sertifikat')
        ->get()
        ->getResultArray();
    }

    public function lihatSertifikat($Id_sertifikat)
    {
        return $this->db->table('sertifikat_dosen s')
        ->join('dosen', 's.NIP = dosen.NIP', 'left')
        ->join('sertifikat', 'sertifikat.Id_sertifikat = s.Id_sertifikat', 'left')
        // ->join('Golongan g', 'g.Id_gol = s.Gol', 'left')
        ->where('s.Id_sertifikat', $Id_sertifikat)
        ->get()
        ->getResultArray();
    }

    public function tampil_gol()
    {
        return $this->db->table('golongan')
        ->get()
        ->getResultArray();
    }

    public function detailSertifikat($NIP)    
    {
        return $this->db->table('sertifikat_dosen s')
        ->join('dosen', 's.NIP = dosen.NIP', 'left')
        ->join('sertifikat', 'sertifikat.Id_sertifikat = s.Id_sertifikat', 'left')
        ->where('s.NIP', $NIP)
        ->get()
        ->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('dosen')->insert($data);
    }

    public function tambahSertifikat($data)
    {
        $this->db->table('sertifikat_dosen')->insert($data);
    }

    public function ubah($data)
    {
        
        $this->db->table('dosen')
        ->where('Id_dosen', $data['Id_dosen'])
        ->update($data);
    }
}