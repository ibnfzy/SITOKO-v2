<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type' => 'INT',
                'constraint' => 3,
                'auto_increment' => true
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5
            ],
            'total_barang' => [
                'type' => 'INT',
                'constraint' => 5
            ],
            'total_bayar' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'potongan' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'status_bayar' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'tgl_checkout' => [
                'type' => 'DATE',
            ],
            'metode_pembayaran' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ]
        ]);

        $this->forge->addKey('id_transaksi', true);

        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transksi');
    }
}