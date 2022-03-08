<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Filter_auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('Nama') != true){
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to(base_url()); 
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if(session()->get('Nama') == true){
            return redirect()->to(base_url('home')); 
        }
    }
}