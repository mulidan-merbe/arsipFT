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
            'title' => 'Tenaga PNS ',
            'pns' => $this->Model_tendik->tampil_pns(),
        );

       
        // dd($data['prodi']);
        return view('tendik/index', $data);

        
    }

    public function honorer()
    {
        $data = array(
            'title' => 'Tenaga Honorer',
            'honorer' => $this->Model_tendik->tampil_honorer(),
        );

        return view('tendik/honorer', $data);
    }

    public function pendukung()
    {
        $data = array(
            'title' => 'Tenaga Pendukung',
            'pendukung' => $this->Model_tendik->tampil_pendukung(),
        );

        return view('tendik/pendukung', $data);
    }

    public function tendik_pns()
    {
        $data = array(
            'title' => 'Tenaga PNS',
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
            'JK' => [
                'label'  => 'Jenis Kelamin',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Jnj_pendidikan' => [
                'label'  => 'Jenjang Pendidikan',
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
                'JK'                => $this->request->getPost('JK'),
                'Jnj_pendidikan'    => $this->request->getPost('Jnj_pendidikan'),
                'Id_gol'            => $this->request->getPost('Id_gol'),
                'Jabatan'           => $this->request->getPost('Jabatan'),
                'Keterangan'        => $this->request->getPost('Keterangan'),
                'Tanggal'           => date('Y-m-d')

            );
            // dd($data);
            $this->Model_tendik->tambah_tendik_pns($data);
            session()->setFlashdata('success', 'Data Berhasil Disimpan');
            return redirect()->to(base_url('tendik'));
        }
    }

    public function simpan_tendik_honorer()
    {
        $data = array(
            'Nama'              => $this->request->getPost('Nama'),
            'JK'                => $this->request->getPost('JK'),
            'Jnj_pendidikan'    => $this->request->getPost('Jnj_pendidikan'),
            'Penempatan'        => $this->request->getPost('Penempatan'),
            'Tanggal'           => date('Y-m-d')

        );
        // dd($data);
        $this->Model_tendik->tambah_tendik_honorer($data);
        session()->setFlashdata('success', 'Data Berhasil Disimpan');
        return redirect()->to(base_url('tendik/honorer'));
    }

    public function simpan_tendik_pendukung()
    {
        $data = array(
            'Nama'              => $this->request->getPost('Nama'),
            'JK'                => $this->request->getPost('JK'),
            'Jnj_pendidikan'    => $this->request->getPost('Jnj_pendidikan'),
            'Penempatan'        => $this->request->getPost('Penempatan'),
            'Tanggal'           => date('Y-m-d')

        );
        // dd($data);
        $this->Model_tendik->tambah_tendik_pendukung($data);
        // session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
        session()->setFlashdata("success", "Data Berhasil Disimpan");
        return redirect()->to(base_url('tendik/pendukung'));
    }

    public function ubahtendik_pns($Id_pns)
    {
        $data = array(
            'title' => 'Tenaga PNS',
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
            'JK' => [
                'label'  => 'Jenis Kelamin',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Jnj_pendidikan' => [
                'label'  => 'Jenjang Pendidikan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Id_gol' => [
                'label'  => 'Jenjang Pendidikan',
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
                'JK'                => $this->request->getPost('JK'),
                'Jnj_pendidikan'    => $this->request->getPost('Jnj_pendidikan'),
                'Id_gol'            => $this->request->getPost('Id_gol'),
                'Jabatan'           => $this->request->getPost('Jabatan'),
                'Keterangan'        => $this->request->getPost('Keterangan'),
                'Tanggal'           => date('Y-m-d')

            );
            // dd($data);
            $this->Model_tendik->ubah_tendik_pns($data);
            session()->setFlashdata('info', 'Data Berhasil Diubah');
            return redirect()->to(base_url('tendik'));
        }
    }

    public function ubah_tendik_honorer()
    {
        $data = array(
            'Id_honorer'        => $this->request->getPost('Id_honorer'),
            'Nama'              => $this->request->getPost('Nama'),
            'JK'                => $this->request->getPost('JK'),
            'Jnj_pendidikan'    => $this->request->getPost('Jnj_pendidikan'),
            'Penempatan'        => $this->request->getPost('Penempatan'),
            'Tanggal'           => date('Y-m-d')

        );
        // dd($data);
        $this->Model_tendik->ubah_tendik_honorer($data);
        session()->setFlashdata('info', 'Data Berhasil Diubah');
        return redirect()->to(base_url('tendik/honorer'));
    }

    public function ubah_tendik_pendukung()
    {
        $data = array(
            'Id_pendukung'      => $this->request->getPost('Id_pendukung'),
            'Nama'              => $this->request->getPost('Nama'),
            'JK'                => $this->request->getPost('JK'),
            'Jnj_pendidikan'    => $this->request->getPost('Jnj_pendidikan'),
            'Penempatan'        => $this->request->getPost('Penempatan'),
            'Tanggal'           => date('Y-m-d')

        );
        // dd($data);
        $this->Model_tendik->ubah_tendik_pendukung($data);
        session()->setFlashdata('info', 'Data Berhasil Diubah');
        return redirect()->to(base_url('tendik/pendukung'));
    }

    public function hapusPns($Id_pns)
    {
        $data = array(
            'Id_pns'            => $Id_pns
         );
         $this->Model_tendik->hapusPns($data);
         session()->setFlashdata('error', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('tendik'));
    }

    public function hapusHonorer($Id_honorer)
    {
        $data = array(
            'Id_honorer'            => $Id_honorer
         );
         $this->Model_tendik->hapusHonorer($data);
         session()->setFlashdata('error', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('tendik/honorer'));
    }

    public function hapusPendukung($Id_pendukung)
    {
        $data = array(
            'Id_pendukung'            => $Id_pendukung
         );
         $this->Model_tendik->hapusPendukung($data);
         session()->setFlashdata('error', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('tendik/pendukung'));
    }
}