<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function dashboard()
    {
        $data = ['title' => 'OPAC POLSRI - Dashboard Admin'];
        return view('pages/admin/index', $data);
    }

    public function login()
    {
        $data = ['title' => 'OPAC POLSRI - Login Admin'];
        return view('pages/login', $data);
    }
}
