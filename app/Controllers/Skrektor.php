<?php


namespace App\Controllers;
use App\Models\Model_skrektor;

class Skrektor extends BaseController
{
    public function __construct(){
        $this->Model_skrektor = new Model_skrektor();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Surat Keputusan Rektor',
            'skrektor' => $this->Model_skrektor->tampil(),
            // 'ubah'  => $this->Model_masuk->ubah(),
            'isi'   => 'SKRektor/index'
        );
        // dd($data['skrektor']);
        return view('layout/wrapper', $data);
    }

    public function detail($Id)
    {
        $data = array(
            'title' => 'Surat Keputusan Rektor',
            'detail' => $this->Model_skrektor->detail($Id),
            // 'tugas_anggota' => $this->Model_tugas_anggota->tampil(),
            'isi'   => 'SKRektor/detail'
        );
        // dd($data['tugas']);
        return view('layout/wrapper', $data);
    }

    public function tambah()
    {
       $data = array(
           'Nomor_surat'        => $this->request->getPost('Nomor_surat'),
           'Tentang'            => $this->request->getPost('Tentang'),
           'Berkas'     => $this->request->getPost('Berkas'),
           'Tanggal'          => date('Y-m-d')
        );
        $this->Model_skrektor->tambah($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkkan');
        return redirect()->to(base_url('skrektor'));
    }

    public function ubah($Id)
    {
        $data = array(
            'Id'            => $Id,
            'Nomor_surat'        => $this->request->getPost('Nomor_surat'),
           'Tentang'            => $this->request->getPost('Tentang'),
           'Berkas'     => $this->request->getPost('Berkas'),
           'Tanggal'          => date('Y-m-d')
         );
         $this->Model_skrektor->ubah($data);
         session()->setFlashdata('pesan', 'Data Berhasil Diubah');
         return redirect()->to(base_url('skrektor'));
    }
}