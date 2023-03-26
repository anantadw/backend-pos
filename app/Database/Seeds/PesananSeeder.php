<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PesananSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for ($i = 0; $i < 1000; $i++) {
            array_push(
                $data,
                [
                    'id_kasir' => rand(1, 3),
                    'tanggal' => Time::now(),
                ]
            );
        }

        // Using Query Builder
        $this->db->table('pesanan')->insertBatch($data);
    }
}
