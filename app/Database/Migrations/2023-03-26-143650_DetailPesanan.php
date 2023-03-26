<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pesanan' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'kode_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
            ],
            'banyak' => [
                'type' => 'INT',
                'unsigned' => true
            ]
        ]);
        $this->forge->addForeignKey('id_pesanan', 'pesanan', 'id_pesanan');
        $this->forge->addForeignKey('kode_produk', 'produk', 'kode_produk');
        $this->forge->createTable('detail_pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('detail_pesanan');
    }
}
