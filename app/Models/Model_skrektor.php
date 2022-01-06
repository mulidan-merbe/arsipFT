<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_skrektor extends Model
{
    public function tampil()
    {
        return $this->db->table('datas d')
        ->select('d.Id, d.Nomor_surat, d.Tentang, d.Berkas, a.Status, a.Nama,  COUNT(a.Id_datas) AS total')
        ->join('datas_anggota a', 'a.Id_datas = d.Id', 'left')
        ->groupBy('d.Id')
        ->orderBy('d.Id', 'DESC')
        ->get()
        ->getResultArray();

        
    }

    public function cek_Id()
    {
        return $this->db->table('datas')
        ->select('Id')
        ->limit('1')
        ->orderBy('Id', 'DESC')
        ->get()
        ->getResultArray();
    }

    public function detail($Id)
    {
        return $this->db->table('datas d')
        ->join('datas_anggota a', 'a.Id_datas = d.Id')
        ->where('d.Id', $Id)
        ->get()
        ->getResultArray();
    }

    public function detail2($Id)
    {
        return $this->db->table('datas d')
        ->where('d.Id', $Id)
        ->get()
        ->getResultArray();
    }

    public function tambah($data)
    {
        $result = $this->db->table('datas')->insert($data);
        return $this->db->insertId();
    }

    public function insert_dosen($data1)
    {
        $this->db->transStart();
        $this->db->table('datas_anggota')->insertBatch($data1);
        $this->db->transComplete();
    }

    public function ubah($data)
    {
        $this->db->table('datas')
        ->where('Id', $data['Id'])
        ->update($data);
    }

    public function hapus($data)
    {
        $this->db->table('surat_keputusan')
        ->where('Id_sk',  $data['Id_sk'])
        ->delete($data);
    }
}