<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananprodukModel extends Model
{
    protected $table            = 'pesanan_produk';
    protected $primaryKey       = 'id_pesanan';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_pelanggan', 'tanggal_pemesanan', 'produk_dipesan', 'gambar'];
}