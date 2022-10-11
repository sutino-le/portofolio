<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        $data = [
            'halaman'   => 'Dashboard',
            'judul'     => 'Awal',
            'subjudul'  => 'View Data'
        ];
        return view('main/layout', $data);
    }

    public function dashboard()
    {
        $data = [
            'halaman'   => 'Dashboard',
            'judul'     => 'Awal',
            'subjudul'  => 'View Data',
            'link'      =>  '/main/dashboard'
        ];
        return view('main/dashboard', $data);
    }
}
