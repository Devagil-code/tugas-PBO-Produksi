<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilihanbahanModel extends Model
{
    protected $table            = 'pemilihan_bahan_baku';
    protected $primaryKey       = 'id_pemilihan';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_pesanan', 'id_bahan_baku'];

    public function getAll()
    {
        $builder = $this->db->table('pemilihan_bahan_baku');
        $builder->join('pesanan_produk', 'pesanan_produk.id_pesanan = pemilihan_bahan_baku.id_pesanan');
        $builder->join('bahan_baku', 'bahan_baku.id_bahan_baku = pemilihan_bahan_baku.id_bahan_baku');
        $query = $builder->get();
        return $query->getResult();
    }
}