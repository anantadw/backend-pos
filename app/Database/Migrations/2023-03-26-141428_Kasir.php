<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kasir extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kasir' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kasir' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'jenis_kelamin' => [
                'type' => 'CHAR',
                'constraint' => 1
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
        $this->forge->addKey('id_kasir', true, true);
        $this->forge->createTable('kasir');
    }

    public function down()
    {
        $this->forge->dropTable('kasir');
    }
}
