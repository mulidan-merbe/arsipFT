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
        return view('sk/surat_keputusan', $data);
    }

    public function tambah()
    {
        $data = array(
            'title' => 'Surat Keputusan',
            'validation' => \Config\Services::validation()
        );
        return view('sk/tambah_sk', $data);
    }

    public function simpan()
    {
        // $Berkas = $this->request->getFile('Berkas');
        // dd($Berkas);

        if(!$this->validate([
            
            'Nomor_sk' => [
                'label'  => 'Nomor SK',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Tanggal_sk' => [
                'label'  => 'Tanggal SK',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Tentang' => [
                'label'  => 'Tentang',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            // 'Berkas' => [
            //     'label'  => 'Berkas',
            //     'rules'  => 'required|max_size[Berkas, 5000]|ext_in[Berkas, jpg,jpeg,png,pdf]',
            //     'errors' => [
            //         'required' => '{field} wajid di isi',
            //         'max_size'  => 'Ukuran {field} Max 5000Kb',
            //         'ext_in'    => 'Format {field} Tidak Sesuai',
            //     ]
            // ]
            
        ])){
            return redirect()->to(base_url('sk/tambah'))->withInput();
        } else {
            $Berkas = $this->request->getFile('Berkas');

            $namaBerkas = $Berkas->getRandomName();
            $Berkas->move('public/berkas_sk', $namaBerkas);

            $data = array(
                'Id_pegawai'    => session()->get('Id_dep'),
                'Nomor_sk'      => $this->request->getPost('Nomor_sk'),
                'Tanggal_sk'    => $this->request->getPost('Tanggal_sk'),
                'Tentang'       => $this->request->getPost('Tentang'),
                'Berkas'        => $namaBerkas,
                'Tanggal'       => date('Y-m-d')

            );
            // dd($data);
            $this->Model_sk->tambah($data);
            session()->setFlashdata('success', 'Data Berhasil Ditambahkkan');
            return redirect()->to(base_url('sk'));
        }
    }

    public function ubah($Id_sk)
    {
        $data = array(
            'title' => 'Surat Keputusan',
            'surat'    => $this->Model_sk->getbyId($Id_sk),
            'validation' => \Config\Services::validation()
        );
        // dd($data['surat']);
        return view('sk/ubah_sk', $data);
    }

    public function ubahData($Id_sk)
    {
        if(!$this->validate([
            
            'Nomor_sk' => [
                'label'  => 'Nomor SK',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Tanggal_sk' => [
                'label'  => 'Tanggal SK',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Tentang' => [
                'label'  => 'Tentang',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            // 'Berkas' => [
            //     'label'  => 'Berkas',
            //     'rules'  => 'required|max_size[Berkas, 5000]|ext_in[Berkas, jpg,jpeg,png,pdf]',
            //     'errors' => [
            //         'required' => '{field} wajid di isi',
            //         'max_size'  => 'Ukuran {field} Max 5000Kb',
            //         'ext_in'    => 'Format {field} Tidak Sesuai',
            //     ]
            // ]
            
        ])){
            return redirect()->to(base_url('sk/tambah'))->withInput();
        } else {
            $Berkas = $this->request->getFile('Berkas');
            $berkasLama = $this->request->getVar('BerkasLama');
            // $NIP = $this->request->getVar('NIP');
            if($Berkas->getError() == 4) {
                $namaBerkas = $berkasLama; 
            } else {
                //nama berkas random
                $namaBerkas = $Berkas->getRandomName();
                $Berkas->move('public/berkas_sk', $namaBerkas);
                // unlink('file/'. $berkasLama);
            }
        // $Id_sk = $Id_sk;
            $data = array(
                'Nomor_sk'      => $this->request->getPost('Nomor_sk'),
                'Tanggal_sk'    => $this->request->getPost('Tanggal_sk'),
                'Tentang'       => $this->request->getPost('Tentang'),
                'Berkas'        => $namaBerkas,
                'Tanggal'       => date('Y-m-d'),
                'Id_sk'          => $Id_sk
            );
            $this->Model_sk->ubah($data);
            session()->setFlashdata('info', 'Data Berhasil Diubah');
            return redirect()->to(base_url('sk'));
            }
    }

    public function hapus($Id_sk)
    {
        $file = $this->Model_sk->getbyId($Id_sk);
        
        unlink('public/berkas_sk/'. $file[0]['Berkas']);   
        $data = array(
            'Id_sk'            => $Id_sk
         );
         $this->Model_sk->hapus($data);
         session()->setFlashdata('error', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('sk'));
    }
}