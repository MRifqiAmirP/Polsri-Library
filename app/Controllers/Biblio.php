<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Biblio extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Bibliographic List'];
        return view('pages/admin/bibliography/bibliography-list', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add New Bibliographic',
            'css' => 'add_bibliography.css',
        ];
        return view('pages/admin/bibliography/add_bibliography_form', $data);
    }
}
