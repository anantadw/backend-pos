<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MemasokSeeder extends Seeder
{
    public function run()
    {
        $kode_produk = ['105959852723', '412660153585', '414688508853', '550616767673', '582112313943', '644002411407', '740018130286', '876016969848', '959622128806', '986811738393'];
        $data = [
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[0],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[1],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[2],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[3],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[4],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[5],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[6],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[7],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[8],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
            [
                'id_pemasok' => rand(1, 3),
                'kode_produk' => $kode_produk[9],
                'banyak' => rand(10, 300),
                'tanggal' => Time::now(),
            ],
        ];

        // Using Query Builder
        $this->db->table('memasok')->insertBatch($data);
    }
}
