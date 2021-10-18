<?php

namespace App\Controllers;

use App\Models\DataModel;

class Admin extends BaseController
{
    protected $dataModel;
    public function __construct()
    {
        $this->dataModel = new DataModel();
    }
    public function Data()
    {

        $data = $this->dataModel->findAll();

        $isi = [
            'data' => $data
        ];


        return view('admin/data', $isi);
    }
    public function register()
    {
        return view('admin/register');
    }
    public function save()
    {
        $this->dataModel->save([
            'Nama' => $this->request->getVar('Nama'),
            'Email' => $this->request->getVar('Email'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Password' => $this->request->getVar('Password'),
            'Prodi' => $this->request->getVar('Prodi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/data');
    }
}
