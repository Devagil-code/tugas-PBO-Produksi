<?php

namespace App\Models;

use CodeIgniter\Model;

class PackingModel extends Model
{
    protected $table = 'packing';
    protected $primaryKey = 'id_packing';
    protected $returnType = 'object';
    protected $allowedFields = ['id_produksi', 'tanggal_packing'];
    public function getAll()
    {
        $builder = $this->db->table('packing');
        $builder->select('packing.*, produksi.tanggal_produksi, pesanan_produk.nama_pelanggan, qc_tes.hasil_tes, pesanan_produk.produk_dipesan, pesanan_produk.gambar');
        $builder->join('produksi', 'produksi.id_produksi = packing.id_produksi');
        $builder->join('qc_tes', 'qc_tes.id_produksi = qc_tes.id_tes');
        $builder->join('pesanan_produk', 'pesanan_produk.id_pesanan = produksi.id_pesanan');
        $query = $builder->get();
        return $query->getResult();
    }
    
}