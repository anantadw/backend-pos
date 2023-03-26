<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Memasok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemasok' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'kode_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
            ],
            'banyak' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'tanggal' => [
                'type' => 'DATE'
            ]
        ]);
        $this->forge->addForeignKey('id_pemasok', 'pemasok', 'id_pemasok');
        $this->forge->addForeignKey('kode_produk', 'produk', 'kode_produk');
        $this->forge->createTable('memasok');
    }

    public function down()
    {
        $this->forge->dropTable('memasok');
    }
}
