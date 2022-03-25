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
        session()->setFlashdata('success', 'Data Berhasil Ditambahkkan');
        return redirect()->to(base_url('dosen/data'));
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

    // public function tambahSertifikat()
    // {
    //    $data = array(
           
    //        'NIP'                    => $this->request->getPost('Nama'),
    //        'Id_sertifikat'          => $this->request->getPost('Id_sertifikat'),
    //        'Nomor_sertifikat'       => $this->request->getPost('Nomor_sertifikat'),
    //        'Keterangan'             => $this->request->getPost('Keterangan'),
    //        'Berkas'                 => $this->request->getPost('Nomor_sertifikat'),
    //     );
    //     // dd($data);
    //     $this->Model_dosen->tambahSertifikat($data);
    //     session()->setFlashdata('pesan', 'Data Berhasil Ditambahkkan');
    //     return redirect()->to(base_url('dosen/data'));
    // }

    public function lihatSertifikat($Id_sertifikat)
    {
        $data = array(
            'title' => 'Dosen',
            'detailSertifikat' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
            'prodi' => $this->Model_dosen->tampil_prodi(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            // 'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
            'validation' => \Config\Services::validation(),
            'gol' => $this->Model_dosen->tampil_gol(),
        );

       
        // dd($data['count']);
        return view('dosen/detail_sertifikatDosen', $data);
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
        session()->setFlashdata('info', 'Data Berhasil Diubah');
        return redirect()->to(base_url('dosen/data'));
    }

    public function getDosen()
    {
        $request = service('request');
        $postData = $request->getPost();

        $response = array();

       // Read new token and assign in $response['token']
        $response['token'] = csrf_hash();

        if(!isset($postData['searchTerm'])){
            // Fetch record
            // $users = new Users();
            $dosen = $this->Model_dosen->tampilSelect();
        }else{
            $searchTerm = $postData['searchTerm'];

            // Fetch record
            // $users = new Users();
            $dosen = $this->Model_dosen->tampilSelect2($searchTerm);
        } 

        $data = array();
        foreach($dosen as $user){
            $data[] = array(
                "NIP" => $user['NIP'],
                "Nama" => $user['Nama'],
            );
        }

        $response['data'] = $data;

        return $this->response->setJSON($response);// session();
    }

    public function tambah_sertifikat()
    {
        $data = array(
            'title' => 'Dosen',
            'dosen' => $this->Model_dosen->tampilSelect(),
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
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Id_sertifikat' => [
                'label'  => 'Sertifikat',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Nomor_sertifikat' => [
                'label'  => 'Nomor Sertifikat',
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
            ],
            'Berkas' => [
                'label'  => 'Berkas',
                'rules'  => 'max_size[Berkas, 5000]|ext_in[Berkas, jpg,jpeg,png,pdf]',
                'errors' => [
                    'max_size'  => 'Ukuran {field} Max 5000Kb',
                    'ext_in'    => 'Format {field} Tidak Sesuai',
                ]
            ]
            
        ])){
            return redirect()->to(base_url('dosen/tambah_sertifikat'))->withInput();
        } else {
            $Berkas = $this->request->getFile('Berkas');

            //apakah tidak ada berkas yang di upload
            if($Berkas->getError() == 4) {
                $namaBerkas = 'default.jpg';
            } else {
                //nama berkas random
                $namaBerkas = $Berkas->getRandomName();
                $Berkas->move('file', $namaBerkas);
            }

            $data = array(
                'NIP'               => $this->request->getPost('NIP'),
                'Id_sertifikat'     => $this->request->getPost('Id_sertifikat'),
                'Nomor_sertifikat'  => $this->request->getPost('Nomor_sertifikat'),
                'Keterangan'        => $this->request->getPost('Keterangan'),
                'Berkas'            => $namaBerkas,

            );
            // dd($data);
            $this->Model_dosen->tambahSertifikat($data);
            session()->setFlashdata('success', 'Data Berhasil Disimpan');
            return redirect()->to(base_url('dosen/dataSertifikat'));
        }
    
    }

    public function ubahSertifikat($Id_serdos)
    {
        $data = array(
            'title' => 'Dosen',
            // 'dosen' => $this->Model_dosen->lihatSertifikat($Id_sertifikat),
            // 'prodi' => $this->Model_dosen->tampil_prodi(),
            'sertifikat' => $this->Model_dosen->tampil_sertifikat(),
            'lihatbyId'  => $this->Model_dosen->tampil_byIdsertifikat($Id_serdos),
            // 'detailSertifikat'  => $this->Model_dosen->detailSertifikat2(),
            // 'gol' => $this->Model_dosen->tampil_gol(),
            'validation' => \Config\Services::validation()
        );

       
        // dd($data['lihatbyId']);
        return view('dosen/ubah_sertifikat', $data);
    }

    public function ubahData_Sertifikat($Id_serdos)
    {
       
        if(!$this->validate([
            
            'NIP' => [
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Id_sertifikat' => [
                'label'  => 'Sertifikat',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajid di isi',
                ],
            ],
            'Nomor_sertifikat' => [
                'label'  => 'Nomor Sertifikat',
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
            ],
            'Berkas' => [
                'label'  => 'Berkas',
                'rules'  => 'max_size[Berkas, 5000]|ext_in[Berkas,jpg,jpeg,png,pdf]',
                'errors' => [
                    'max_size'  => 'Ukuran {field} Max 5000Kb',
                    'ext_in'    => 'Format {field} Tidak Sesuai',
                ]
            ]
            
        ])){
            return redirect()->to(base_url('dosen/ubahSertifikat/'. $Id_serdos ))->withInput();
        } else {
            $Berkas = $this->request->getFile('Berkas');
            $berkasLama = $this->request->getVar('BerkasLama');
            $NIP = $this->request->getVar('NIP');
            if($Berkas->getError() == 4) {
                if($berkasLama){
                    $namaBerkas = $berkasLama;
                } else {
                    $namaBerkas = 'default.jpg';
                }
            } else {
                //nama berkas random
                $namaBerkas = $Berkas->getRandomName();
                $Berkas->move('file', $namaBerkas);
                // unlink('file/'. $berkasLama);
            }

            $data = array(
                'Id_serdos'         => $this->request->getPost('Id_serdos'),
                'NIP'               => $this->request->getPost('NIP'),
                'Id_sertifikat'     => $this->request->getPost('Id_sertifikat'),
                'Nomor_sertifikat'  => $this->request->getPost('Nomor_sertifikat'),
                'Keterangan'        => $this->request->getPost('Keterangan'),
                'Berkas'            => $namaBerkas,

            );
            // dd($data);
            $this->Model_dosen->ubahSertifikat($data);
            session()->setFlashdata('info', 'Data Berhasil Diubah');
            return redirect()->to(base_url('dosen/detailSertifikat/'. $NIP));

        }

    
    }

    public function hapusSertifikat($Id_serdos)
    {
        // $uri = service('uri');
        // $NIP = $uri->getSegment(3);
        // dd($NIP);
        // $Id_serdos = $this->request->getVar('Id_serdos');
        $file = $this->Model_dosen->tampil_byIdsertifikat($Id_serdos);
        // dd($file);
        //cek jika file berkas default.jpg
        // if( $file[0]['Berkas'] != 'default.jpg') {
        //     unlink('file/'. $file[0]['Berkas']);    
        // }
        

        $data = array(
            'Id_serdos'            => $Id_serdos
         );
         $this->Model_dosen->hapusSertifikat($data);
         session()->setFlashdata('error', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('dosen/detailSertifikat/'. $file[0]['NIP']));
    }
}