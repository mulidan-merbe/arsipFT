<?php


namespace App\Controllers;
use App\Models\Model_kategori;

class Kategori extends BaseController
{
    public function __construct(){
        $this->Model_kategori = new Model_kategori();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'kategori' => $this->Model_kategori->tampil(),
            // 'ubah'  => $this->Model_kategori->ubah(),
            'isi'   => 'kategori'
        );
        return view('layout/wrapper', $data);
    }

    public function tambah()
    {
       $data = array(
           'Nama_kategori' => $this->request->getPost()
        );
        $this->Model_kategori->tambah($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkkan');
        return redirect()->to(base_url('kategori'));
    }

    public function ubah($Id)
    {
        $data = array(
            'Id'            => $Id,
            'Nama_kategori' => $this->request->getPost()
         );
         $this->Model_kategori->ubah($data);
         session()->setFlashdata('pesan', 'Data Berhasil Diubah');
         return redirect()->to(base_url('kategori'));
    }

    public function hapus($Id)
    {
        $data = array(
            'Id'            => $Id
         );
         $this->Model_kategori->hapus($data);
         session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('kategori'));
    }
}