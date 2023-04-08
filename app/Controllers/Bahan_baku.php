<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
// use App\Models\BahanbakuModel;

class Bahan_baku extends ResourcePresenter
{
    // function __construct(){
    //     $this->bahan_baku = new BahanbakuModel();
    // }
    protected $modelName = 'App\Models\BahanbakuModel';
    // protected $helpers = ['custom'];
    
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['bahan_baku'] = $this->model->findAll();
        return view('bahan_baku/bahan_baku', $data);
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
        return view('bahan_baku/new');
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
        $this->model->insert($data);
        return redirect()->to(site_url('bahan_baku'))->with('success', 'Data berhasil ditambahkan');
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
        $bahan_baku = $this->model->where('id_bahan_baku', $id)->first();
        if(is_object($bahan_baku)){
            $data['bahan_baku'] = $bahan_baku;
        return view('bahan_baku/edit', $data);
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
        $this->model->update($id, $data);
        return redirect()->to(site_url('bahan_baku'))->with('success', 'Data berhasil diubah');
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
        return redirect()->to(site_url('bahan_baku'))->with('success', 'Data berhasil dihapus');
    }
}