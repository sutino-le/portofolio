<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengalaman extends Model
{
    protected $table            = 'pengalaman';
    protected $primaryKey       = 'pengid';
    protected $allowedFields    = [
        'pengperusahaan', 'pengjobtitle', 'pengawal', 'pengakhir', 'pengstatus', 'pengkota', 'pengdekripsi'
    ];
}
