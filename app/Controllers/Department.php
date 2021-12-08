<?php


namespace App\Controllers;
use App\Models\Model_department;

class Department extends BaseController
{
    public function __construct(){
        $this->Model_department = new Model_department();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Department',
            'dep' => $this->Model_department->tampil(),
            // 'ubah'  => $this->Model_kategori->ubah(),
            'isi'   => 'department'
        );
        return view('layout/wrapper', $data);
    }

    public function tambah()
    {
       $data = array(
           'Department' => $this->request->getPost()
        );
        $this->Model_department->tambah($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkkan');
        return redirect()->to(base_url('department'));
    }

    public function ubah($Id_dep)
    {
        $data = array(
            'Id_dep'            => $Id_dep,
            'Department' => $this->request->getPost()
         );
         $this->Model_department->ubah($data);
         session()->setFlashdata('pesan', 'Data Berhasil Diubah');
         return redirect()->to(base_url('department'));
    }

    public function hapus($Id_dep)
    {
        $data = array(
            'Id_dep'            => $Id_dep
         );
         $this->Model_department->hapus($data);
         session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('department'));
    }
}