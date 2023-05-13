<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\PemilihanbahanModel;
use App\Models\PesananprodukModel;
use App\Models\ProduksiModel;
use App\Models\BahanbakuModel;
use App\Models\QctesModel;

class Qc_tes extends ResourcePresenter
{
    protected $qc_tes;
    protected $produksi;
    protected $pemilihan_bahan_baku;
    protected $pesanan_produk;
    protected $bahan_baku;

    public function __construct()
    { 
        $this->qc_tes = new QctesModel();
        $this->produksi = new ProduksiModel();
        $this->pemilihan_bahan_baku = new PemilihanbahanModel();
        $this->pesanan_produk = new PesananprodukModel();
        $this->bahan_baku = new BahanbakuModel();
    }

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['qc_tes'] = $this->qc_tes->getAll();
        return view('qc_tes/qc_tes', $data);
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
        $data['pemilihan_bahan_baku'] = $this->pemilihan_bahan_baku->findAll();
        $data['pesanan_produk'] = $this->pesanan_produk->findAll();
        $data['bahan_baku'] = $this->bahan_baku->findAll();
        $data['produksi'] = $this->produksi->findAll();
        return view('qc_tes/new', $data);
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
        $this->qc_tes->insert($data);
        return redirect()->to(site_url('qc_tes'))->with('success', 'Data berhasil ditambahkan');
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
        $qc_tes = $this->qc_tes->find($id);
        if (is_object($qc_tes)) {
            $data['qc_tes'] = $qc_tes;
            return view('qc_tes/edit', $data);
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
        $this->qc_tes->update($id, $data);
        return redirect()->to(site_url('qc_tes'))->with('success', 'Data berhasil diubah');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed
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
        $this->qc_tes->delete($id);
        return redirect()->to(site_url('qc_tes'))->with('danger', 'Data berhasil dihapus');
    }
}
