<?php


namespace App\Controllers;
use App\Models\Model_sk;

class Sk extends BaseController
{
    public function __construct(){
        $this->Model_sk = new Model_sk();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Surat Keputusan',
            'sk' => $this->Model_sk->tampil(),
            // 'ubah'  => $this->Model_masuk->ubah(),
            'isi'   => 'surat_keputusan'
        );
        return view('surat_keputusan', $data);
    }

    public function tambah()
    {
        $data = array(
            'Nomor_sk'      => $this->request->getPost('Nomor_sk'),
            'Tanggal_sk'    => $this->request->getPost('Tanggal_sk'),
            'Tentang'       => $this->request->getPost('Tentang'),
            'Tanggal'       => date('Y-m-d')
         );
         $this->Model_sk->tambah($data);
         session()->setFlashdata('pesan', 'Data Berhasil Ditambahkkan');
         return redirect()->to(base_url('sk'));
    }

    public function ubah($Id_sk)
    {
        // $Id_sk = $Id_sk;
        $data = array(
            'Nomor_sk'      => $this->request->getPost('Nomor_sk'),
            'Tanggal_sk'    => $this->request->getPost('Tanggal_sk'),
            'Tentang'       => $this->request->getPost('Tentang'),
            'Tanggal'       => date('Y-m-d'),
            'Id_sk'          => $Id_sk
         );
         $this->Model_sk->ubah($data);
         session()->setFlashdata('pesan', 'Data Berhasil Diubah');
         return redirect()->to(base_url('sk'));
    }

    public function hapus($Id_sk)
    {
        $data = array(
            'Id_sk'            => $Id_sk
         );
         $this->Model_sk->hapus($data);
         session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('sk'));
    }
}