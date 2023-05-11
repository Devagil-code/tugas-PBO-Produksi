<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\BahanbakuModel;
use App\Models\PesananprodukModel;
use App\Models\PemilihanbahanModel;

class Pemilihan_bahan_baku extends ResourcePresenter
{
    protected $pemilihan_bahan_baku;
    protected $bahan_baku;
    protected $pesanan_produk;

    public function __construct()
    {
        $this->pemilihan_bahan_baku = new PemilihanBahanModel();
        $this->bahan_baku = new BahanbakuModel();
        $this->pesanan_produk = new PesananprodukModel();
    }

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['pemilihan_bahan_baku'] = $this->pemilihan_bahan_baku->getAll();
        return view('pemilihan_bahan_baku/pemilihan_bahan_baku', $data);
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
        $data['bahan_baku'] = $this->bahan_baku->findAll();
        $data['pesanan_produk'] = $this->pesanan_produk->findAll(); // Tambahkan ini
        return view('pemilihan_bahan_baku/new', $data);
    }
    

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->pemilihan_bahan_baku->insert($data);
        return redirect()->to(site_url('pemilihan_bahan_baku'))->with('success', 'Data berhasil ditambahkan');
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
        $pemilihan_bahan_baku = $this->pemilihan_bahan_baku->find($id);
        if (is_object($pemilihan_bahan_baku)) {
            $data['bahan_baku'] = $this->bahan_baku->findAll();
            $data['pemilihan_bahan_baku'] = $pemilihan_bahan_baku;
            return view('pemilihan_bahan_baku/edit', $data);
        } else {
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
        $this->pemilihan_bahan_baku->update($id, $data);
        return redirect()->to(site_url('pemilihan_bahan_baku'))->with('success', 'Data berhasil diubah');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed
     * public function remove($id = null)
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
    $this->pemilihan_bahan_baku->delete($id);
    return redirect()->to(site_url('pemilihan_bahan_baku'))->with('danger', 'Data berhasil dihapus');
}
}