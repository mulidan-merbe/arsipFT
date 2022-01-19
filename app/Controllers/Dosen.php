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
            'title' => 'Dosen Fakultas Teknik',
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'count' => $this->Model_dosen->get_count(),
            // 'isi'   => 'dosen/index'
        );

       
        // dd($data['count']);
        return view('dosen/index', $data);

        
    }

    public function data()
    {
        if (isset($_GET['filter']) && !empty($_GET['filter'])) {
			$filter = $_GET['filter'];

			if ($filter == '1') {
				$Id_sertifikat = $_GET['filter'];
                $data = array(
                    'title' => 'PPI',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			} elseif ($filter == '2') {
				$Id_sertifikat = $_GET['filter'];
				$data = array(
                    'title' => 'IPP',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			} elseif ($filter == '3') {
				$Id_sertifikat = $_GET['filter'];
				$data = array(
                    'title' => 'IPM',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			} elseif ($filter == '4') {
				$Id_sertifikat = $_GET['filter'];
				$data = array(
                    'title' => 'IPU',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			} elseif ($filter == '5') {
				$Id_sertifikat = $_GET['filter'];
				$data = array(
                    'title' => 'AFEO',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			} elseif ($filter == '6') {
				$Id_sertifikat = $_GET['filter'];
				$data = array(
                    'title' => 'ACPE',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			} elseif ($filter == '7') {
				$Id_sertifikat = $_GET['filter'];
				$data = array(
                    'title' => 'SERTIFIKAT KOMPETENSI',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			} elseif ($filter == '8') {
				$Id_sertifikat = $_GET['filter'];
				$data = array(
                    'title' => 'SERTIFIKAT KETERANGAN AHLI',
                    'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
                    'prodi' => $this->Model_dosen->tampil_prodi(),
                    'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                    'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
                    'gol' => $this->Model_dosen->tampil_gol(),
                    // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                    // 'ubah'  => $this->Model_kategori->ubah(),
                    
                );
                return view('filter_sertifikat', $data);
			}
		} else {
            $data = array(
                'title' => 'Dosen Fakultas Teknik',
                'dosen' => $this->Model_dosen->tampil(),
                'prodi' => $this->Model_dosen->tampil_prodi(),
                'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
                // 'detailSertifikat'  => $this->Model_dosen->detailSertifikat(),
                'gol' => $this->Model_dosen->tampil_gol(),
                // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
                // 'ubah'  => $this->Model_kategori->ubah(),
                'isi'   => 'dosen2'
            );
            return view('dosen2', $data);
		}

    

   
    // dd($data['count']);
   
    }

    public function lihat($Id_prodi)
    {
        $data = array(
            'title' => 'Dosen Fakultas Teknik',
            'dosen' => $this->Model_dosen->tampilbyProdi($Id_prodi),
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            // 'detailSertifikat'  => $this->Model_dosen->detailSertifikat(),
            'gol' => $this->Model_dosen->tampil_gol(),
            // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
            // 'ubah'  => $this->Model_kategori->ubah(),
            'isi'   => 'dosen2'
        );
        return view('dosen2', $data);
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

    public function tambahSertifikat()
    {
       $data = array(
           
           'NIP'                    => $this->request->getPost('Nama'),
           'Id_sertifikat'          => $this->request->getPost('Id_sertifikat'),
           'Nomor_sertifikat'       => $this->request->getPost('Nomor_sertifikat'),
           'Keterangan'             => $this->request->getPost('Keterangan'),
           'Berkas'                 => $this->request->getPost('Nomor_sertifikat'),
        );
        // dd($data);
        $this->Model_dosen->tambahSertifikat($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkkan');
        return redirect()->to(base_url('dosen/data'));
    }

    public function detailSertifikat($NIP)
    {
        $data = array(
            'title' => 'Data Sertifikat Dosen',
            'detailSertifikat'  => $this->Model_dosen->detailSertifikat($NIP),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            'validation' => \Config\Services::validation(),
            'isi'   => 'detail_sertifikatDosen'
        );
        // dd($data['detailSertifikat']);
        return view('layout/wrapper', $data);
    }

    

    public function ubah($Id_dosen)
    {
       $data = array(
           'Id_dosen'   => $Id_dosen,
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
        
        $this->Model_dosen->ubah($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to(base_url('dosen'));
    }

    public function ubahSertifikat($NIP)
    {
       
        $Berkas = $this->validate([
            'Berkas' => [
                'label'  => 'Berkas',
                'rules'  => 'uploaded[Berkas]|max_size[Berkas, 5000]|ext_in[Berkas, jpg,jpeg,png,doc,docx,pdf]',
                'errors' => [
                    'uploaded'  => '{field} Wajid Di isi',
                    'max_size'  => 'Ukuran {field} Max 5000Kb',
                    'ext_in'    => 'Format {field} Wajib PNG',
                ]
            ]
            
        ]);
    
        if (!$Berkas) {
            // dd($Berkas);
            session()->setFlashdata('pesangagal', 'Data File tidak sesuai');
            $validation = \Config\Services::validation();
          
            return redirect()->to(base_url('dosen/detailSertifikat/'. $NIP))->withInput()->with('validation', $validation);
        } else {
            $pdfFile = $this->request->getFile('Berkas');
            $pdfFile->move(WRITEPATH . 'uploads'. $pdfFile);
    
            $data = [
                'NIP'                    => $this->request->getPost('Nama'),
                'Id_sertifikat'          => $this->request->getPost('Id_sertifikat'),
                'Nomor_sertifikat'       => $this->request->getPost('Nomor_sertifikat'),
                'Keterangan'             => $this->request->getPost('Keterangan'),
                'Berkas'                 =>  $pdfFile->getRandomName(),
 
            ];

            $this->Model_dosen->ubahSertifikat($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diubah');
            return redirect()->to(base_url('dosen/detailSertifikat/'));
        }
    }
}