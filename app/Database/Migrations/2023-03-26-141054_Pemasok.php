<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemasok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemasok' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_pemasok' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'nomor_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => 13,
                'unique' => true
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id_pemasok', true, true);
        $this->forge->createTable('pemasok');
    }

    public function down()
    {
        $this->forge->dropTable('pemasok');
    }
}
