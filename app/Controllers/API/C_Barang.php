<?php

namespace App\Controllers\API;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class C_Barang extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\M_Barang';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function addBarang()
    {
        $barang = [
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'stok' => $this->request->getPost('stok'),
            'harga' => $this->request->getPost('harga')
        ];

        $this->model->insert($barang);

        return $this->respondCreated([
            'message' => 'Barang baru berhasil ditambahkan.'
        ]);
    }

    public function kurangiStock($kode){
        $databarang = $this->model->find($kode);
        $data = [
            'stok' => $this->request->getRawInputVar('stok'),
        ];

        if($databarang['stok'] < $data['stok']) {
            return $this->respond([
                'message' => 'Gagal Ditambahkan.'
            ]);
        }

        $databarang['stok'] = $databarang['stok'] - $data['stok']; 

        $this->model->update($kode, $databarang);

        return $this->respondUpdated([
            'message' => 'Stok barang berhasil diperbarui.'
        ]);
    }

    public function tambahStock($kode)
    {
        $databarang = $this->model->find($kode);
        $data = [
            'stok' => $this->request->getRawInputVar('stok'),
        ];
        $databarang['stok'] = $databarang['stok'] + $data['stok']; 
        $this->model->update($kode, $databarang);

        return $this->respondUpdated([
            'message' => 'Stok barang berhasil diperbarui.'
        ]);
    }

    public function deleteBarang($kode)
    {
        $this->model->delete($kode);

        return $this->respondDeleted([
            'message' => 'Barang berhasil dihapus.'
        ]);
    }
}