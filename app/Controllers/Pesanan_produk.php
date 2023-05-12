<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
// use App\Models\BahanbakuModel;

class Pesanan_produk extends ResourcePresenter
{
    // function __construct(){
    //     $this->pesanan_produk = new BahanbakuModel();
    // }
    protected $modelName = 'App\Models\PesananprodukModel';
    // protected $helpers = ['custom'];
    
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    
    public function index()
    {
        $data['pesanan_produk'] = $this->model->findAll();
        return view('pesanan_produk/pesanan_produk', $data);
    }


    
    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        return view('pesanan_produk/new');
    }
/**
 * 
 * 
 */
    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data  = $this->request->getPost();
        $gambar = $this->request->getFile('gambar');   
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Validasi format gambar
            $formatGambar = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($gambar->getExtension(), $formatGambar)) {
                return redirect()->back()->with('danger', 'Format gambar tidak valid. Harap unggah gambar dengan format JPG, JPEG, PNG, atau GIF.');
            }

            // Validasi ukuran file
            $ukuranFile = $gambar->getSize();
            $ukuranMax = 2048 * 1024; // 2MB
            if ($ukuranFile > $ukuranMax) {
                return redirect()->back()->with('danger', 'Ukuran gambar terlalu besar. Harap unggah gambar dengan ukuran maksimum 2MB.');
            }

            // Mendapatkan nama file
            $namaFile = $gambar->getName();

            // Memindahkan file ke direktori penyimpanan
            $gambar->move(ROOTPATH . 'public/template/assets/img/produk/', $namaFile);

            // Menyimpan path gambar ke dalam variabel $pathGambar
            $pathGambar = './template/assets/img/produk/' . $namaFile;

            // Menyimpan path gambar ke dalam kolom 'gambar' dalam tabel produk
            $data['gambar'] = $pathGambar;
        } else {
            return redirect()->back()->with('danger', 'Gambar tidak valid atau sudah dipindahkan.');
        }

        // Simpan data produk ke database
        $this->model->insert($data);
        return redirect()->to(site_url('pesanan_produk'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $pesanan_produk = $this->model->where('id_pesanan', $id)->first();
        if(is_object($pesanan_produk)){
            $data['pesanan_produk'] = $pesanan_produk;
        return view('pesanan_produk/edit', $data);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $gambar = $this->request->getFile('gambar');   
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Validasi format gambar
            $formatGambar = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($gambar->getExtension(), $formatGambar)) {
                return redirect()->back()->with('danger', 'Format gambar tidak valid. Harap unggah gambar dengan format JPG, JPEG, PNG, atau GIF.');
            }

            // Validasi ukuran file
            $ukuranFile = $gambar->getSize();
            $ukuranMax = 2048 * 1024; // 2MB
            if ($ukuranFile > $ukuranMax) {
                return redirect()->back()->with('danger', 'Ukuran gambar terlalu besar. Harap unggah gambar dengan ukuran maksimum 2MB.');
            }

            // Mendapatkan nama file
            $namaFile = $gambar->getName();

            // Memindahkan file ke direktori penyimpanan
            $gambar->move(ROOTPATH . 'public/template/assets/img/produk/update/', $namaFile);

            // Menyimpan path gambar ke dalam variabel $pathGambar
            $pathGambar = './template/assets/img/produk/update/' . $namaFile;

            // Menyimpan path gambar ke dalam kolom 'gambar' dalam tabel produk
            $data['gambar'] = $pathGambar;
        } else {
            return redirect()->back()->with('danger', 'Gambar tidak valid atau sudah dipindahkan.');
        }

        $this->model->update($id, $data);
        return redirect()->to(site_url('pesanan_produk'))->with('success', 'Data berhasil diubah');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to(site_url('pesanan_produk'))->with('danger', 'Data berhasil dihapus');
    }
}