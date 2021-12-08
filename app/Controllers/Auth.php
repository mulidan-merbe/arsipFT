<?php

namespace App\Controllers;
use App\Models\Model_auth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_auth = new Model_auth();
    }
    public function index()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('login', $data);
    }

    public function login()
    {
        if($this->validate([
                'Email' => [
                    'label'  => 'E-mail',
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
            ])) {
                $Email = $this->request->getPost('Email');
                $Password = $this->request->getPost('Password');
                $Password = $this->request->getPost('Password');
                $cek =  $this->Model_auth->login($Email, $Password);
                if($cek) {
                    session()->set('log', true);
                    session()->set('Nama', $cek['Nama']);
                    session()->set('Email', $cek['Email']);
                    session()->set('Level', $cek['Level']);
                    return redirect()->to(base_url('home'));
                } else {
                    session()->setFlashdata('pesan', 'Login Gagal, Username dan Password Salah');
                    return redirect()->to(base_url());
                }
            } else {
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to(base_url());
            }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('Nama');
        session()->remove('Email');
        session()->remove('Level');
        session()->setFlashdata('pesan', 'Anda Berhasil Logout');
        return redirect()->to(base_url());
    }
}