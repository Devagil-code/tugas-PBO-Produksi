<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiModel extends Model
{
    protected $table = 'produksi';
    protected $primaryKey = 'id_produksi';
    protected $returnType = 'object';
    protected $allowedFields = ['id_pesanan', 'id_pemilihan', 'jumlah_produksi', 'tanggal_produksi'];

    public function getAll()
    {
        $builder = $this->db->table('produksi');
        $builder->select('produksi.*, pesanan_produk.nama_pelanggan, pesanan_produk.produk_dipesan, pesanan_produk.gambar, pemilihan_bahan_baku.pilih_bahan,bahan_baku.nama_bahan_baku');
        $builder->join('pesanan_produk', 'pesanan_produk.id_pesanan = produksi.id_pesanan');
        $builder->join('pemilihan_bahan_baku', 'pemilihan_bahan_baku.id_pemilihan = produksi.id_pemilihan');
        $builder->join('bahan_baku', 'bahan_baku.id_bahan_baku = pemilihan_bahan_baku.id_bahan_baku');
        $query = $builder->get();
        return $query->getResult();
    }
}
