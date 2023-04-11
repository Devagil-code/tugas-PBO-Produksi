<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Laporan_produksi extends Controller
{
    protected $helpers = ['custom'];

    public function index()
    {
        $db = \Config\Database::connect();

        
            // Mengambil data dari tabel produksi, detail_produksi, produk, dan bahan_baku
            $builder = $db->table('produksi');
            $builder->select('produksi.id_produksi, produksi.jumlah_produksi, produksi.tanggal_produksi, produk.nama_produk, produk.deskripsi_produk, bahan_baku.nama_bahan_baku, bahan_baku.deskripsi_bahan_baku');
            $builder->join('detail_produksi', 'detail_produksi.id_produksi = produksi.id_produksi');
            $builder->join('produk', 'produk.id_produk = detail_produksi.id_produk');
            $builder->join('bahan_baku', 'bahan_baku.id_bahan_baku = detail_produksi.id_bahan_baku');
            $query = $builder->get();
            $data['laporan'] = $query->getResult();

            // Menampilkan view laporan dengan data yang sudah diambil
            return view('laporan_produksi/laporan_produksi', $data);
        }

    public function hapus($id)
    {
    $db = \Config\Database::connect();
    
    // Hapus data berdasarkan id
    $db->table('detail_produksi')->where('id_produksi', $id)->delete();
    $db->table('produksi')->where('id_produksi', $id)->delete();
    
    return redirect()->to('/laporan_produksi')->with('danger', 'Data laporan produksi berhasil dihapus');
    }

}
