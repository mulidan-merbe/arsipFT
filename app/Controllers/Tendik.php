<?php


namespace App\Controllers;
use App\Models\Model_tendik;
use App\Models\Model_dosen;

class Tendik extends BaseController
{
    public function __construct(){
        $this->Model_tendik = new Model_tendik();
        $this->Model_dosen = new Model_dosen();
        helper(['form','url']);
    }
    public function index()
    {
        $data = array(
            'title' => 'Tenaga Pendidikan',
            'pns' => $this->Model_tendik->tampil_pns(),
        );

       
        // dd($data['prodi']);
        return view('tendik/index', $data);

        
    }

    public function honorer()
    {
        $data = array(
            'title' => 'Tenaga Pendidikan',
            'honorer' => $this->Model_tendik->tampil_honorer(),
        );

        return view('tendik/honorer', $data);
    }

    public function tendik_pns()
    {
        $data = array(
            'title' => 'Tenaga Pendidikan',
            'golongan' => $this->Model_dosen->tampil_gol(),
            'validation' => \Config\Services::validation()
        );

       
        // dd($data['prodi']);
        return view('tendik/tambah_tendik_pns', $data);
    }

    public function tendik_honorer()
    {
        $data = array(
            'title' => 'Tenaga Pendidikan',
            'validation' => \Config\Services::validation()
        );

       
        // dd($data['prodi']);
        return view('tendik/tambah_tendik_honorer', $data);
    }

    public function simpan_tendik_pns()
    {

        // dd($this->request->getVar());
        if(!$this->validate([
            
            'NIP' => [
                'label'  => 'NIP',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Nama' => [
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Id_gol' => [
                'label'  => 'Pangkat Gol/Ruang',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Jabatan' => [
                'label'  => 'Jabatan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Keterangan' => [
                'label'  => 'Keterangan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ]
            
        ])){
            return redirect()->to(base_url('tendik/tendik_pns'))->withInput();
        } else {

            $data = array(
                'NIP'               => $this->request->getPost('NIP'),
                'Nama'              => $this->request->getPost('Nama'),
                'Id_gol'            => $this->request->getPost('Id_gol'),
                'Jabatan'           => $this->request->getPost('Jabatan'),
                'Keterangan'        => $this->request->getPost('Keterangan'),
                'Tanggal'           => date('Y-m-d')

            );
            // dd($data);
            $this->Model_tendik->tambah_tendik_pns($data);
            session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
            return redirect()->to(base_url('tendik'));
        }
    }

    public function simpan_tendik_honorer()
    {
        $data = array(
            'Nama'              => $this->request->getPost('Nama'),
            'Penempatan'               => $this->request->getPost('Penempatan'),
            'Tanggal'           => date('Y-m-d')

        );
        // dd($data);
        $this->Model_tendik->tambah_tendik_honorer($data);
        session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
        return redirect()->to(base_url('tendik/honorer'));
    }

    public function ubahtendik_pns($Id_pns)
    {
        $data = array(
            'title' => 'Tenaga Pendidikan',
            'pns'   => $this->Model_tendik->tampilbyid_pns($Id_pns),
            'golongan' => $this->Model_dosen->tampil_gol(),
            'validation' => \Config\Services::validation()
        );

       
        // dd($data['pns']);
        return view('tendik/ubah_tendik_pns', $data);
    }

    public function ubah_tendik_pns()
    {
        if(!$this->validate([
            
            'NIP' => [
                'label'  => 'NIP',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Nama' => [
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Id_gol' => [
                'label'  => 'Pangkat Gol/Ruang',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Jabatan' => [
                'label'  => 'Jabatan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Keterangan' => [
                'label'  => 'Keterangan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ]
            
        ])){
            return redirect()->to(base_url('tendik/tendik_pns'))->withInput();
        } else {

            $data = array(
                'Id_pns'            => $this->request->getPost('Id_pns'),
                'NIP'               => $this->request->getPost('NIP'),
                'Nama'              => $this->request->getPost('Nama'),
                'Id_gol'            => $this->request->getPost('Id_gol'),
                'Jabatan'           => $this->request->getPost('Jabatan'),
                'Keterangan'        => $this->request->getPost('Keterangan'),
                'Tanggal'           => date('Y-m-d')

            );
            // dd($data);
            $this->Model_tendik->ubah_tendik_pns($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diubah');
            return redirect()->to(base_url('tendik'));
        }
    }
}