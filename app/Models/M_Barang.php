<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Barang extends Model
{
    protected $table            = 'barang';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['kode', 'nama', 'harga', 'stok'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
