<?php


namespace App\Controllers;
use App\Models\Model_masuk;
use App\Models\Model_tujuan;

class Masuk extends BaseController
{
    public function __construct(){
        
       
        $this->Model_masuk = new Model_masuk();
        $this->Model_tujuan = new Model_tujuan();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Surat Masuk',
            'masuk' => $this->Model_masuk->tampil(),
            'tujuan' => $this->Model_tujuan->tampil(),
        );
        // dd($data['masuk']);
        return view('masuk/index', $data);
    }

    public function tambah()
    {
       $data = array(
           'Nomor_surat'        => $this->request->getPost('Nomor_surat'),
           'Asal_surat'         => $this->request->getPost('Asal_surat'),
           'Tanggal_surat'      => $this->request->getPost('Tanggal_surat'),
           'Tanggal_terima'     => $this->request->getPost('Tanggal_terima'),
           'Ringkasan'          => $this->request->getPost('Ringkasan'),
           'Id_tujuan'          => $this->request->getPost('Id_tujuan')
        );
        $this->Model_masuk->tambah($data);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkkan');
        return redirect()->to(base_url('masuk'));
    }

    public function ubah($Id_masuk)
    {
        $data = array(
            'Id_masuk'            => $Id_masuk,
            'Nomor_surat'        => $this->request->getPost('Nomor_surat'),
           'Asal_surat'         => $this->request->getPost('Asal_surat'),
           'Tanggal_surat'      => $this->request->getPost('Tanggal_surat'),
           'Tanggal_terima'     => $this->request->getPost('Tanggal_terima'),
           'Ringkasan'          => $this->request->getPost('Ringkasan'),
           'Id_tujuan'          => $this->request->getPost('Id_tujuan')
         );

        //  dd($data[Id_masuk]);
         $this->Model_masuk->ubah($data);
         session()->setFlashdata('info', 'Data Berhasil Diubah');
         return redirect()->to(base_url('masuk'));
    }

    public function hapus($Id_masuk)
    {
        $data = array(
            'Id_masuk'            => $Id_masuk
         );
         $this->Model_masuk->hapus($data);
         session()->setFlashdata('error', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('masuk'));
    }
}