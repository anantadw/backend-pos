<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PemasokSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_pemasok' => 'Leon S Kennedy',
                'nomor_telepon' => '081234567890',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_pemasok' => 'Ada Wong',
                'nomor_telepon' => '081234567899',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_pemasok' => 'Chris Redfield',
                'nomor_telepon' => '087734567890',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Using Query Builder
        $this->db->table('pemasok')->insertBatch($data);
    }
}
