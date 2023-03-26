<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pesanan' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_kasir' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ]
        ]);
        $this->forge->addKey('id_pesanan', true, true);
        $this->forge->addForeignKey('id_kasir', 'kasir', 'id_kasir');
        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');
    }
}
