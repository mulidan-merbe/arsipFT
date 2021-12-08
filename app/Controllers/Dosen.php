<?php


namespace App\Controllers;
use App\Models\Model_dosen;

class Dosen extends BaseController
{
    public function __construct(){
        $this->Model_dosen = new Model_dosen();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Dosen',
            'dosen' => $this->Model_dosen->tampil(),
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'gol' => $this->Model_dosen->tampil_gol(),
            // 'ubah'  => $this->Model_kategori->ubah(),
            'isi'   => 'dosen'
        );
        // dd($data['prodi']);
        return view('layout/wrapper', $data);
    }

    public function tambah()
    {
       $data = array(
           'Nama'       => $this->request->getPost('Nama'),
           'NIP'        => $this->request->getPost('NIP'),
           'JK'         => $this->request->getPost('JK'),
           'Agama'      => $this->request->getPost('Agama'),
           'Gol'        => $this->request->getPost('Gol'),
           'Jab'        => $this->request->getPost('Jab'),
           'NIDN'       => $this->request->getPost('NIDN'),
           'Jnj'        => $this->request->getPost('Jnj'),
           'Id_prodi'   => $this->request->getPost('Id_prodi')
        );
        $this->Model_dosen->tambah($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkkan');
        return redirect()->to(base_url('dosen'));
    }
}