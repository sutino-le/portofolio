<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profil extends BaseController
{
    public function index()
    {
        $data = [
            'halaman'   => 'Profil',
            'judul'     => 'Profil',
            'subjudul'  => 'View Data',
            'link'      =>  '/profil/index'
        ];
        return view('profil/viewdata', $data);
    }
}
