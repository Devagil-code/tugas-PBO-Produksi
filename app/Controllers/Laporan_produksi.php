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

    public function cetak()
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
    
        return  view('laporan_produksi/cetak');
    }
    
    
    

    public function ekspor()
    {
        $db = \Config\Database::connect();
    
        // Mengambil data dari tabel produksi, detail_produksi, produk, dan bahan_baku
        $builder = $db->table('produksi');
        $builder->select('produksi.id_produksi, produksi.jumlah_produksi, produksi.tanggal_produksi, produk.nama_produk, produk.deskripsi_produk, bahan_baku.nama_bahan_baku, bahan_baku.deskripsi_bahan_baku');
        $builder->join('detail_produksi', 'detail_produksi.id_produksi = produksi.id_produksi');
        $builder->join('produk', 'produk.id_produk = detail_produksi.id_produk');
        $builder->join('bahan_baku', 'bahan_baku.id_bahan_baku = detail_produksi.id_bahan_baku');
        $query = $builder->get();
        $laporan = $query->getResult();
    
        // Membuat objek Spreadsheet
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    
        // Membuat objek worksheet
        $worksheet = $spreadsheet->getActiveSheet();
    
        // Set judul kolom
        $worksheet->setCellValue('A1', 'ID Produksi');
        $worksheet->setCellValue('B1', 'Jumlah Produksi');
        $worksheet->setCellValue('C1', 'Tanggal Produksi');
        $worksheet->setCellValue('D1', 'Nama Produk');
        $worksheet->setCellValue('E1', 'Deskripsi Produk');
        $worksheet->setCellValue('F1', 'Nama Bahan Baku');
        $worksheet->setCellValue('G1', 'Deskripsi Bahan Baku');
    
        // Looping untuk mengisi data pada sheet
        $i = 2;
        foreach ($laporan as $data) {
            $worksheet->setCellValue('A' . $i, $data->id_produksi);
            $worksheet->setCellValue('B' . $i, $data->jumlah_produksi);
            $worksheet->setCellValue('C' . $i, $data->tanggal_produksi);
            $worksheet->setCellValue('D' . $i, $data->nama_produk);
            $worksheet->setCellValue('E' . $i, $data->deskripsi_produk);
            $worksheet->setCellValue('F' . $i, $data->nama_bahan_baku);
            $worksheet->setCellValue('G' . $i, $data->deskripsi_bahan_baku);
            $i++;
        }
    
        // Membuat objek writer untuk menulis file Excel
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    
        // Menuliskan file Excel ke folder yang ditentukan
        $filename = 'laporan-produksi.xlsx';
        $writer->save($filename);
    
        // Mengunduh file Excel ke browser
        return $this->response->download($filename, NULL);
    }
    

    public function laporan_bulanan()
    {
        $db = \Config\Database::connect();
    
        // Mengambil data laporan produksi bulanan
        // ...
    
        // Menampilkan view laporan bulanan dengan data yang sudah diambil
        return view('laporan_produksi/laporan_bulanan');
    }

}