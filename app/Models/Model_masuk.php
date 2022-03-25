<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_masuk extends Model
{
    protected $table = 'masuk';
    protected $primaryKey = 'Id_masuk';
    protected $allowedFields = ['name', 'email'];

    public function tampil()
    {
        return $this->db->table('masuk m')
        ->select('m.Id_masuk, m.Asal_surat, m.Nomor_surat, m.Tanggal_surat, m.Tanggal_terima, m.Ringkasan, m.Status,t.Id_tujuan, t.Tujuan, d.Department')
        ->join('disposisi', 'disposisi.Id_masuk = m.Id_masuk', 'left' )
        ->join('tujuan t', 't.Id_tujuan = m.Id_tujuan', 'left')
        ->join('dep d', 'd.Id_dep = disposisi.Id_dep', 'left')
        ->orderBy('m.Id_masuk', 'DESC')
        // ->paginate(10, 'masuk')
        ->get()
        ->getResultArray();
    }

    public function department()
    {
        return $this->db->table('dep')
        ->get()
        ->getResultArray();
    }

    public function tujuan()
    {
        return $this->db->table('tujuan')
        ->get()
        ->getResultArray();
    }

    public function search($cari = null)
    {
        return $this->table('masuk')->like('Asal_surat', $cari);
    }

    // public function tujuan()

    public function tambah($data)
    {
        $this->db->table('masuk')->insert($data);
    }

    public function tampilbyId($data)
    {
        return $this->db->table('user')
        ->join('dep', 'dep.Id_dep = user.Id_dep', 'left')
        ->where('user.Id', $data['Id'])
        ->get()
        ->getRowArray();
    }

    public function ubah($data)
    {
        $this->db->table('masuk')
        ->where('Id_masuk', $data['Id_masuk'])
        ->update($data);
    }

    public function hapus($data)
    {
        $this->db->table('masuk')
        ->where('Id_masuk',  $data['Id_masuk'])
        ->delete($data);
    }
}