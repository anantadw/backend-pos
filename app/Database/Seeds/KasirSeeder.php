<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class KasirSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kasir' => 'Amanda Amano',
                'jenis_kelamin' => 'P',
                'nomor_telepon' => '081234567890',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_kasir' => 'Ryundai Saepuloh',
                'jenis_kelamin' => 'L',
                'nomor_telepon' => '081234567899',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_kasir' => 'Jinsai Tanjung',
                'jenis_kelamin' => 'L',
                'nomor_telepon' => '087734567890',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Using Query Builder
        $this->db->table('kasir')->insertBatch($data);
    }
}
