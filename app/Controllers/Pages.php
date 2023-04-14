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

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => "About Me | Ahdian's Dev"
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => "Contact Us | Ahdian's Dev",
            'alamat' => [
                [
                    'tipe' => "Rumah",
                    'alamat' => "Jl. Nuri No. 34",
                    'kota' => "Bogor"
                ],
                [
                    'tipe' => "Kantor",
                    'alamat' => "Jl. Setia Budi No. 143",
                    'kota' => "Bandung"
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
