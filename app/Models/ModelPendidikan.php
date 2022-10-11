<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendidikan extends Model
{
    protected $table            = 'pendidikan';
    protected $primaryKey       = 'penid';
    protected $allowedFields    = [
        'penjenjang', 'pennama', 'penalamat', 'penmulai', 'penakhir', 'penstatus', 'penjurusan', 'pennilai', 'penlogo'
    ];
}
