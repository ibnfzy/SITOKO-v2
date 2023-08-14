<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi_detail' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'id_transaksi' => [
                'type' => 'INT',
                'constraint' => 3
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 3
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 3
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'total_harga' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'tgl_order' => [
                'type' => 'DATE'
            ],
            'kuantitas' => [
                'type' => 'INT',
                'constraint' => 3
            ]
        ]);

        $this->forge->addKey('id_transaksi_detail', true);

        $this->forge->createTable('transaksi_detail');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_detail');
    }
}