<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendidikan;

class Pendidikan extends BaseController
{
    public function index()
    {
        $modelPendidikan = new ModelPendidikan();
        $data = [
            'halaman'   => 'Pendidikan',
            'judul'     => 'Pendidikan',
            'subjudul'  => 'View Data',
            'link'      => '/pendidikan/index',
            'tampildata'    => $modelPendidikan->findAll()
        ];
        return view('pendidikan/viewdata', $data);
    }


    function pendidikandetail($id)
    {
        if ($this->request->isAJAX()) {

            $modelPendidikan = new ModelPendidikan();

            $rowData = $modelPendidikan->find($id);

            $data = [
                'penjenjang'    => $rowData['penjenjang'],
                'pennama'       => $rowData['pennama'],
                'penalamat'     => $rowData['penalamat'],
                'penmulai'      => $rowData['penmulai'],
                'penakhir'      => $rowData['penakhir'],
                'penstatus'     => $rowData['penstatus'],
                'penjurusan'    => $rowData['penjurusan'],
                'pennilai'      => $rowData['pennilai'],
                'penlogo'       => $rowData['penlogo']
            ];

            $json = [
                'data' => view('pendidikan/modaldetail', $data)
            ];

            echo json_encode($json);
        }
    }
}
