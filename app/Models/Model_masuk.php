<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_masuk extends Model
{
    public function tampil()
    {
        return $this->db->table('masuk')
        ->join('disposisi', 'disposisi.Id_masuk = masuk.Id_masuk', 'left' )
        ->join('tujuan', 'tujuan.Id_tujuan = masuk.Id_tujuan', 'left')
        ->join('dep', 'dep.Id_dep = disposisi.Id_dep', 'left')
        ->orderBy('masuk.Id_masuk', 'DESC')
        ->get()
        ->getResultArray();
    }

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