<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\BahanbakuModel;
use App\Models\ProduksiModel;
use App\Models\ProdukModel;
use App\Models\DetailModel;

class Detail_produksi extends ResourcePresenter
{
    
    function __construct(){
        $this->bahan_baku = new BahanbakuModel();
        $this->produksi = new ProduksiModel();
        $this->produk = new ProdukModel();
        $this->detail_produksi = new DetailModel();

    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['detail_produksi'] = $this->detail_produksi->getAll();
        return view('detail_produksi/detail_produksi', $data);
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
        $data['produksi'] = $this->produksi->findAll();
        $data['produk'] = $this->produk->findAll();
        return view('detail_produksi/new', $data);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data  = $this->request->getPost();
        $this->detail_produksi->insert($data);
        return redirect()->to(site_url('detail_produksi'))->with('success', 'Data berhasil ditambahkan');
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
        // $produksi = $this->produksi->find($id);
        // if(is_object($produksi)){
        //     $data['bahan_baku'] = $this->bahan_baku->findAll();
        //     $data['produksi'] = $produksi;
        // return view('produksi/edit', $data);
        // }else{
        //     throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        // }
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
        // $data = $this->request->getPost();
        // $this->produksi->update($id, $data);
        // return redirect()->to(site_url('produksi'))->with('success', 'Data berhasil diubah');
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
        $this->detail_produksi->delete($id);
        return redirect()->to(site_url('detail_produksi'))->with('success', 'Data berhasil dihapus');
    }
}