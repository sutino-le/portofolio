<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPengalaman;

class Pengalaman extends BaseController
{
    public function index()
    {
        $modelPengalaman = new ModelPengalaman();
        $data = [
            'halaman'       => 'Pengalaman',
            'judul'         => 'Pengalaman',
            'subjudul'      => 'View Data',
            'link'          => '/pengalaman/index',
            'tampildata'    => $modelPengalaman->findAll()
        ];
        return view('pengalaman/viewdata', $data);
    }

    function pengalamandetail($id)
    {
        if ($this->request->isAJAX()) {

            $modelPengalaman = new ModelPengalaman();

            $rowData = $modelPengalaman->find($id);

            $data = [
                'perusahaan'    => $rowData['pengperusahaan'],
                'jobtitle'      => $rowData['pengjobtitle'],
                'start'         => $rowData['pengawal'],
                'end'           => $rowData['pengakhir'],
                'status'        => $rowData['pengstatus'],
                'kota'          => $rowData['pengkota'],
                'deskripsi'     => $rowData['pengdekripsi'],
            ];

            $json = [
                'data' => view('pengalaman/modaldetail', $data)
            ];

            echo json_encode($json);
        }
    }
}
