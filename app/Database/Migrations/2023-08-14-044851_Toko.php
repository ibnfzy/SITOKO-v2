<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Toko extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_toko' => [
                'type' => 'INT',
                'constraint' => 1,
                'auto_increment' => true
            ],
            'nomor_toko' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'alamat_toko' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'transfer' => [
                'type' => 'VARCHAR',
                'constraint' => 5
            ],
            'cash' => [
                'type' => 'VARCHAR',
                'constraint' => 5
            ],
            'qris' => [
                'type' => 'VARCHAR',
                'constraint' => 5
            ],
            'corousel_type' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ]
        ]);

        $this->forge->addKey('id_toko', true);

        $this->forge->createTable('toko');
    }

    public function down()
    {
        $this->forge->dropTable('toko');
    }
}