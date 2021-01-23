<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Bachtiar Muhammad Lubis',
            'data_array' => [1, 2, 3, "empat"]
        ];
        return view("pages/home", $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Bachtiar Muhammad Lubis'
        ];
        return view("pages/about", $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us | Bachtiar Muhammad Lubis',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Melati VIII No. 26B Helvetia',
                    'kota' => 'Medan'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Raden Saleh No. 2 Kayanya ',
                    'kota' => 'Medan'
                ]
            ]
        ];
        return view("pages/contact", $data);
    }
    //--------------------------------------------------------------------

}
