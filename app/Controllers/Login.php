<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function auth() {
        $nip = $this->request->getPost('nip');
        $password = $this->request->getPost('password');

        if($nip === 'admin' && $password === 'password'){
            return $this->response->setJSON([
                'statusCode' => 200,
                'status' => 'success',
                'message' => 'Login berhasil!',
                'redirect' => base_url('/admin')
            ]);
        } else {
            return $this->response->setJSON([
                'statusCode' => 401,
                'status' => 'error',
                'message' => 'NIP atau Password salah'
            ]);
        }
    }
}
