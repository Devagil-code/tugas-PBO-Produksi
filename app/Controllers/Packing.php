<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\PackingModel;
use App\Models\PesananprodukModel;
use App\Models\ProduksiModel;
use App\Models\QctesModel;


class Packing extends ResourcePresenter
{
    protected $packing;
    protected $qc_tes;
    protected $produksi;
    protected $pesanan_produk;

    public function __construct()
    { 
        $this->packing = new PackingModel();
        $this->qc_tes = new QctesModel();
        $this->produksi = new ProduksiModel();
        $this->pesanan_produk = new PesananprodukModel();
        
    }

    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['packing'] = $this->packing->getAll();
        return view('packing/packing', $data);
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
        $data['pesanan_produk'] = $this->pesanan_produk->findAll();
        $data['produksi'] = $this->produksi->findAll();
        $data['qc_tes'] = $this->qc_tes->findAll();
        return view('packing/new', $data);
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
        $this->packing->insert($data);
        return redirect()->to(site_url('packing'))->with('success', 'Data berhasil ditambahkan');
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
        $packing = $this->packing->find($id);
        if (is_object($packing)) {
            $data['packing'] = $packing;
            return view('packing/edit', $data);
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
        $this->packing->update($id, $data);
        return redirect()->to(site_url('packing'))->with('success', 'Data berhasil diubah');
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
        $this->packing->delete($id);
        return redirect()->to(site_url('packing'))->with('danger', 'Data berhasil dihapus');
    }
}