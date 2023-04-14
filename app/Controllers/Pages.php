<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home | Ahdian's Dev",
            'tes' => ['satu', 'dua', 'tiga']
        ];

        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => "About Me | Ahdian's Dev"
        ];

        echo view('layout/header');
        echo view('pages/about');
        echo view('layout/footer');
    }
}
