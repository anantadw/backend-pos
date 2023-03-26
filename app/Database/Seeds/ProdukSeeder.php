<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Teh Pucuk',
                'harga_produk' => 4000,
                'stok_produk' => 120,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Indomie Rebus Ayam Bawang',
                'harga_produk' => 3500,
                'stok_produk' => 1870,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Terigu Segitiga Biru',
                'harga_produk' => 18000,
                'stok_produk' => 145,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Mountea',
                'harga_produk' => 4000,
                'stok_produk' => 234,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Mizone',
                'harga_produk' => 6500,
                'stok_produk' => 201,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Minyak Kayu Putih',
                'harga_produk' => 14000,
                'stok_produk' => 78,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Obat Batuk OBH',
                'harga_produk' => 17000,
                'stok_produk' => 45,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Indomie Goreng Rendang',
                'harga_produk' => 4000,
                'stok_produk' => 234,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Tolak Angin Box',
                'harga_produk' => 12500,
                'stok_produk' => 109,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'kode_produk' => rand(100000000000, 999999999999),
                'nama_produk' => 'Lampu Philip 10 Watt',
                'harga_produk' => 49000,
                'stok_produk' => 87,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO produk (kode_produk, nama_produk, harga_produk, stok_produk) VALUES(:kode_produk, :nama_produk, :harga_produk, :stok_produk)', $data);

        // Using Query Builder
        $this->db->table('produk')->insertBatch($data);
    }
}
