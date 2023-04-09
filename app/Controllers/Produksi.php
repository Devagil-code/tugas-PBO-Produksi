<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\BahanbakuModel;
use App\Models\ProduksiModel;

class Produksi extends ResourcePresenter
{
    
    function __construct(){
        $this->bahan_baku = new BahanbakuModel();
        $this->produksi = new ProduksiModel();
    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['produksi'] = $this->produksi->getAll();
        return view('produksi/produksi', $data);
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
        return view('produksi/new', $data);
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
        $this->produksi->insert($data);
        return redirect()->to(site_url('produksi'))->with('success', 'Data berhasil ditambahkan');
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
        $produksi = $this->produksi->find($id);
        if(is_object($produksi)){
            $data['bahan_baku'] = $this->bahan_baku->findAll();
            $data['produksi'] = $produksi;
        return view('produksi/edit', $data);
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
        $this->produksi->update($id, $data);
        return redirect()->to(site_url('produksi'))->with('success', 'Data berhasil diubah');
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
        //
    }
}