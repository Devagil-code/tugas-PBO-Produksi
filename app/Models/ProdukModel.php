<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_produk', 'deskripsi_produk', 'harga_produk', 'stok_produk', 'gambar'];
}