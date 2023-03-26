<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'unique' => true
            ],
            'harga_produk' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'stok_produk' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('kode_produk', true, true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
