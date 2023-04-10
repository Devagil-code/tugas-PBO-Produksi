<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{
    protected $table            = 'detail_produksi';
    protected $primaryKey       = 'id_detail_produksi';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_produk', 'id_produksi', 'id_bahan_baku'];

    function getAll(){
        $builder = $this->db->table('detail_produksi');
        $builder->select('detail_produksi.*, produk.nama_produk, produksi.jumlah_produksi, bahan_baku.nama_bahan_baku, produksi.tanggal_produksi');
        $builder->join('bahan_baku', 'bahan_baku.id_bahan_baku = detail_produksi.id_bahan_baku');
        $builder->join('produksi', 'produksi.id_produksi = detail_produksi.id_produksi');
        $builder->join('produk', 'produk.id_produk = detail_produksi.id_produk');
        $query = $builder->get();
        return $query->getResult();
    }
    
}