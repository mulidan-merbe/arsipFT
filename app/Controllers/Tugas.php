<?php


namespace App\Controllers;
use App\Models\Model_tugas;
// use App\Models\Model_tugas_anggota;

class Tugas extends BaseController
{
    public function __construct(){
        
       
        $this->Model_tugas = new Model_tugas();
        // $this->Model_tugas_anggota = new Model_tugas_anggota();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Surat Tugas',
            'tugas' => $this->Model_tugas->tampil(),
            // 'tugas_anggota' => $this->Model_tugas_anggota->tampil(),
            'isi'   => 'tugas/index'
        );
        // dd($data['tugas']);
        return view('tugas/index', $data);
    }

    public function detail($Id_tugas)
    {
        $data = array(
            'title' => 'Surat Tugas',
            'detail' => $this->Model_tugas->detail($Id_tugas),
            // 'tugas_anggota' => $this->Model_tugas_anggota->tampil(),
            'isi'   => 'tugas/detail'
        );
        // dd($data['tugas']);
        return view('tugas/detail', $data);
    }
}