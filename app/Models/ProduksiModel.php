<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiModel extends Model
{
    protected $table            = 'produksi';
    protected $primaryKey       = 'id_produksi';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_bahan_baku', 'jumlah_produksi', 'tanggal_produksi'];
}