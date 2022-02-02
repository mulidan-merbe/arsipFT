<?php


namespace App\Controllers;
use App\Models\Model_dosen;

class Dosen extends BaseController
{
    public function __construct(){
        $this->Model_dosen = new Model_dosen();
        helper(['form','url']);
    }
    public function index()
    {
        $data = array(
            'title' => 'Dosen',
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'count' => $this->Model_dosen->count_dosen(),
            'countId' => $this->Model_dosen->count_Iddosen(),
            // 'isi'   => 'dosen/index'
        );

       
        // dd($data['prodi']);
        return view('dosen/index', $data);

        
    } 

    public function data()
    {
        // if (isset($_GET['filter']) && !empty($_GET['filter'])) {
		// 	$filter = $_GET['filter'];

		// 	if ($filter == '1') {
		// 		$Id_sertifikat = $_GET['filter'];
        //         $data = array(
        //             'title' => 'PPI',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	} elseif ($filter == '2') {
		// 		$Id_sertifikat = $_GET['filter'];
		// 		$data = array(
        //             'title' => 'IPP',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	} elseif ($filter == '3') {
		// 		$Id_sertifikat = $_GET['filter'];
		// 		$data = array(
        //             'title' => 'IPM',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	} elseif ($filter == '4') {
		// 		$Id_sertifikat = $_GET['filter'];
		// 		$data = array(
        //             'title' => 'IPU',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	} elseif ($filter == '5') {
		// 		$Id_sertifikat = $_GET['filter'];
		// 		$data = array(
        //             'title' => 'AFEO',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	} elseif ($filter == '6') {
		// 		$Id_sertifikat = $_GET['filter'];
		// 		$data = array(
        //             'title' => 'ACPE',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	} elseif ($filter == '7') {
		// 		$Id_sertifikat = $_GET['filter'];
		// 		$data = array(
        //             'title' => 'SERTIFIKAT KOMPETENSI',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	} elseif ($filter == '8') {
		// 		$Id_sertifikat = $_GET['filter'];
		// 		$data = array(
        //             'title' => 'SERTIFIKAT KETERANGAN AHLI',
        //             'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
        //             'prodi' => $this->Model_dosen->tampil_prodi(),
        //             'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //             'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
        //             'gol' => $this->Model_dosen->tampil_gol(),
        //             // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //             // 'ubah'  => $this->Model_kategori->ubah(),
                    
        //         );
        //         return view('filter_sertifikat', $data);
		// 	}
		// } else {
        //     $data = array(
        //         'title' => 'Dosen',
        //         'dosen' => $this->Model_dosen->tampil(),
        //         'prodi' => $this->Model_dosen->tampil_prodi(),
        //         'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
        //         // 'detailSertifikat'  => $this->Model_dosen->detailSertifikat(),
        //         'gol' => $this->Model_dosen->tampil_gol(),
        //         // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
        //         // 'ubah'  => $this->Model_kategori->ubah(),
        //         'isi'   => 'dosen/data'
        //     );
        //     return view('dosen/data', $data);
		// }

        $data = array(
            'title' => 'Dosen',
            'dosen' => $this->Model_dosen->tampil(),
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            // 'detailSertifikat'  => $this->Model_dosen->detailSertifikat(),
            'gol' => $this->Model_dosen->tampil_gol(),
            // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
            // 'ubah'  => $this->Model_kategori->ubah(),
            'isi'   => 'dosen/data'
        );
        return view('dosen/data', $data);
    

   
    // dd($data['count']);
   
    }

    public function prodi($Id_prodi)
    {
        $data = array(
            'title' => 'Dosen',
            'dosen' => $this->Model_dosen->tampilbyProdi($Id_prodi) ,
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            // 'detailSertifikat'  => $this->Model_dosen->detailSertifikat(),
            'gol' => $this->Model_dosen->tampil_gol(),
            // 'detailSertifikat '  => $this->Model_dosen->detailSertifikat(),
            // 'ubah'  => $this->Model_kategori->ubah(),
            'isi'   => 'dosen/data'
        );
        return view('dosen/data', $data);
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

    public function sertifikat()
    {
        $data = array(
            'title' => 'Dosen',
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            'count' => $this->Model_dosen->count_sertifikat(),
            'countId' => $this->Model_dosen->count_Idsertifikat(),
            // 'isi'   => 'dosen/index'
        );

       
        // dd($data['sertifikat']);
        return view('dosen/sertifikat', $data);
    }

    public function dataSertifikat()
    {
        $data = array(
            'title' => 'Dosen',
            'dosen' => $this->Model_dosen->tampil_sertifikatDosen(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
            // 'isi'   => 'dosen/index'
        );
        // dd($data['dosen']);
        return view('dosen/data_sertifikat', $data);
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

    public function lihatSertifikat($Id_sertifikat)
    {
        $data = array(
            'title' => 'Dosen',
            'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
            'gol' => $this->Model_dosen->tampil_gol(),
        );

       
        // dd($data['count']);
        return view('dosen/filter_sertifikat', $data);
    }

    public function detailSertifikat($NIP)
    {
        $data = array(
            'title' => 'Data Sertifikat Dosen',
            'detailSertifikat'  => $this->Model_dosen->detailSertifikat($NIP),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            'validation' => \Config\Services::validation(),
        );
        // dd($data['detailSertifikat']);
        return view('dosen/detail_sertifikatDosen', $data);
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
        return redirect()->to(base_url('dosen/data'));
    }

    public function tambah_sertifikat()
    {
        // session();
        $data = array(
            'title' => 'Dosen',
            // 'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
            'gol' => $this->Model_dosen->tampil_gol(),
            'validation' => \Config\Services::validation()
        );

       
        // dd($data['count']);
        return view('dosen/tambah_sertifikat', $data);
    }

    public function simpan_sertifikat()
    {
        
        // dd($this->request->getVar());
        if(!$this->validate([
            
            'NIP' => [
                'label'  => 'NIP',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Id_sertifikat' => [
                'label'  => 'Sertifikat',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Nomor_sertifikat' => [
                'label'  => 'Nomor Sertifikat',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Keterangan' => [
                'label'  => 'Keterangan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Berkas' => [
                'label'  => 'Berkas',
                'rules'  => 'uploaded[Berkas]|max_size[Berkas, 5000]|ext_in[Berkas, jpg,jpeg,png,pdf]',
                'errors' => [
                    'uploaded'  => '{field} Wajid Di isi',
                    'max_size'  => 'Ukuran {field} Max 5000Kb',
                    'ext_in'    => 'Format {field} Wajib PNG',
                ]
            ]
            
        ])){
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url('dosen/tambah_sertifikat'))->withInput();
        } else {
            $data = array(
                'NIP'               => $this->request->getPost('NIP'),
                'Id_sertifikat'     => $this->request->getPost('Id_sertifikat'),
                'Nomor_sertifikat'  => $this->request->getPost('Nomor_sertifikat'),
                'Keterangan'        => $this->request->getPost('Keterangan'),
                'Berkas'            => $this->request->getPost('Berkas'),

            );
            $this->Model_user->tambah($data);
            session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
            return redirect()->to(base_url('user'));
        }
    
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