<?php

namespace App\Models;

use CodeIgniter\Model;

class QctesModel extends Model
{
    protected $table = 'qc_tes';
    protected $primaryKey = 'id_tes';
    protected $returnType = 'object';
    protected $allowedFields = ['id_produksi', 'hasil_tes'];

    public function getAll()
    {
        $builder = $this->db->table('qc_tes');
        $builder->select('qc_tes.*, produksi.tanggal_produksi, pesanan_produk.nama_pelanggan, pesanan_produk.produk_dipesan, pesanan_produk.gambar, pemilihan_bahan_baku.pilih_bahan, bahan_baku.nama_bahan_baku');
        $builder->join('produksi', 'produksi.id_produksi = qc_tes.id_produksi');
        $builder->join('pesanan_produk', 'pesanan_produk.id_pesanan = produksi.id_pesanan');
        $builder->join('pemilihan_bahan_baku', 'pemilihan_bahan_baku.id_pemilihan = produksi.id_pemilihan');
        $builder->join('bahan_baku', 'bahan_baku.id_bahan_baku = pemilihan_bahan_baku.id_bahan_baku');
        $query = $builder->get();
        return $query->getResult();
    }
    
}
