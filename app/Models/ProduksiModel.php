<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiModel extends Model
{
    protected $table            = 'produksi';
    protected $primaryKey       = 'id_produksi';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_bahan_baku', 'jumlah_produksi', 'tanggal_produksi'];

    function getAll(){
    $builder = $this->db->table('produksi');
    $builder->join('bahan_baku', 'bahan_baku.id_bahan_baku = produksi.id_bahan_baku');
    $query = $builder->get();
    return $query->getResult();
    }
}