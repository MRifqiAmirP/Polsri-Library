<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = ['title' => 'OPAC POLSRI - Login Admin'];
        return view('pages/login', $data);
    }

    public function auth()
    {
        $nip = $this->request->getPost('nip');
        $password = $this->request->getPost('password');

        if ($nip === 'admin' && $password === 'admin') {
            return $this->response->setJSON(['statusCode' => 200, 'message' => 'Login berhasil!']);
        } else {
            return $this->response->setJSON([
                'statusCode' => 401,
                'status' => 'error',
                'message' => 'NIP atau Password salah'
            ]);
        }
    }

    public function logout(): ResponseInterface
    {
        // Logic to handle user logout, e.g., destroying session
        return redirect()->to(base_url('/login'));
    }
}
