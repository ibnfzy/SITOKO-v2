<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 3,
                'auto_increment' => true
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'harga_barang' => [
                'type' => 'INT',
                'constraint' => 8,
            ],
            'kategori_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'stok_barang' => [
                'type' => 'INT',
                'constraint' => 3
            ],
            'deskripsi_barang' => [
                'type' => 'TEXT',
            ],
            'gambar_barang' => [
                'type' => 'TEXT'
            ]
        ]);

        $this->forge->addKey('id_barang', true);

        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}