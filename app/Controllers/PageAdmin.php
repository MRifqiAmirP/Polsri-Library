<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageAdmin extends BaseController
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
