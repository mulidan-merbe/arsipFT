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

    public function tampilbyProdi($Id_prodi)
    {
        return $this->db->table('dosen d')
        // ->select('d.Id_dosen, d.NIP, d.Nama, d.JK, d.Agama, g.Id_gol, g.golongan, d.Jab, d.Jnj, d.NIDN, p.Id_prodi, p.prodi,  COUNT(s.NIP) AS total')
        ->join('prodi p', 'p.Id_prodi = d.Id_prodi', 'left')
        ->join('Golongan g', 'g.Id_gol = d.Gol', 'left')
        ->where('d.Id_prodi ', $Id_prodi)
        ->orderBy('d.Id_dosen', 'ASC')
        ->get()
        ->getResultArray();
    }

    public function count_dosen()
    {
        return $this->db->table('dosen d')
        ->select('p.Id_prodi, p.prodi, COUNT(d.Id_prodi) AS total ')
        ->join('prodi p', 'p.Id_prodi = d.Id_prodi', 'left')
        ->distinct('total')
        ->groupBy('d.Id_prodi')
        ->get()
        ->getResultArray();
    }

    public function count_sertifikat()
    {
        return $this->db->table('sertifikat_dosen d')
        ->select('p.Id_sertifikat, p.Sertifikat, COUNT(d.Id_sertifikat) AS total ')
        ->join('sertifikat p', 'p.Id_sertifikat = d.Id_sertifikat', 'left')
        ->groupBy('d.Id_sertifikat')
        ->get()
        ->getResultArray();
    }

    public function count_Iddosen()
    {
        return $this->db->table('dosen ')
        ->select(' COUNT(Id_dosen) AS total ')
        ->get()
        ->getResultArray();
    }

    public function count_Idsertifikat()
    {
        return $this->db->table('sertifikat_dosen d')
        ->select(' COUNT(d.Id_serdos) AS total ')
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
        // ->select('Sertifikat')
        ->get()
        ->getResultArray();
    }

    public function tampil_sertifikatDosen()
    {
        return $this->db->table('sertifikat_dosen s')
        ->select(' DISTINCT(s.NIP), COUNT(s.NIP) AS total, d.Nama, p.prodi')
        ->join('dosen d', 's.NIP = d.NIP', 'left')
        ->join('prodi p', 'p.Id_prodi = d.Id_prodi', 'left')
        ->join('sertifikat', 'sertifikat.Id_sertifikat = s.Id_sertifikat', 'left')
        ->groupBy('s.NIP')
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

    public function detailSertifikat2()    
    {
        return $this->db->table('sertifikat_dosen s')
        ->join('dosen', 's.NIP = dosen.NIP', 'left')
        ->join('sertifikat', 'sertifikat.Id_sertifikat = s.Id_sertifikat', 'left')
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