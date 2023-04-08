<?php

namespace App\Models;

use CodeIgniter\Model;

class BahanbakuModel extends Model
{
    protected $table            = 'bahan_baku';
    protected $primaryKey       = 'id_bahan_baku';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_bahan_baku', 'deskripsi_bahan_baku', 'satuan_bahan_baku', 'stok_bahan_baku'];
}