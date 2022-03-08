<?php


namespace App\Controllers;
use App\Models\Model_user;
use App\Models\Model_department;

class User extends BaseController
{
    public function __construct(){
        $this->Model_user = new Model_user();
        $this->Model_department = new Model_department();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Pengguna',
            'user' => $this->Model_user->tampil(),
            // 'ubah'  => $this->Model_kategori->ubah(),
            'isi'   => 'user/index'
        );
        return view('user/index', $data);
    }

    public function tambah()
    {
        
        $data = array(
            'title' => 'Pengguna',
            'dep' => $this->Model_department->tampil(),
            'isi'   => 'user/tambah',
            'validation' => \Config\Services::validation()
        );
        return view('user/tambah', $data);
    }

    public function tambah_data()
    {
        if(!$this->validate([
            'Nama' => [
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
                
            ]
            ,
            'Email' => [
                'label'  => 'Email',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Level' => [
                'label'  => 'Level',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Department' => [
                'label'  => 'Department',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('user/tambah'))->withInput()->with('validation', $validation);
        } else {
            $data = array(
                'Nama'      => $this->request->getPost('Nama'),
                'Email'     => $this->request->getPost('Email'),
                'Password'  => password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
                'Level'     => $this->request->getPost('Level'),
                'Id_dep'    => $this->request->getPost('Department'),

            );
            $this->Model_user->tambah($data);
            session()->setFlashdata('pesan', 'Data Berhasil Disimpan');
            return redirect()->to(base_url('user'));
        }
    }


    public function ubah($Id)
    {
        $data = array(
            'Id' => $Id
         );
        $data = array(
            'title' => 'Pengguna',
            'dep' => $this->Model_department->tampil(),
            'user'  => $this->Model_user->tampilbyId($data),
            'isi'   => 'user/ubah',
            'validation' => \Config\Services::validation()
        );
        // dd($data['user']);
        return view('user/ubah', $data);
    }

    public function ubahData($Id)
    {

        if(!$this->validate([
            'Nama' => [
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
                
            ]
            ,
            'Email' => [
                'label'  => 'Email',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Level' => [
                'label'  => 'Level',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
            'Department' => [
                'label'  => 'Department',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajid Di isi',
                ],
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('user/ubah/'.$Id))->withInput()->with('validation', $validation);
        } else {
            $data = array(
                'Id'        => $Id,
                'Nama'      => $this->request->getPost('Nama'),
                'Email'     => $this->request->getPost('Email'),
                'Password'  => $this->request->getPost('Password'),
                'Level'     => $this->request->getPost('Level'),
                'Id_dep'    => $this->request->getPost('Department'),
             );
             $this->Model_user->ubah($data);
             session()->setFlashdata('pesan', 'Data Berhasil Diubah');
             return redirect()->to(base_url('user'));
        }
       
    }

    public function hapus($Id)
    {
        $data = array(
            'Id'            => $Id
         );
         $this->Model_user->hapus($data);
         session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
         return redirect()->to(base_url('user'));
    }
}