<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_review' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 3
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5
            ],
            'isi_review' => [
                'type' => 'TEXT'
            ],
            'bintang' => [
                'type' => 'INT',
                'constraint' => 1
            ],
            'insert_datetime' => [
                'type' => 'VARCHAR',
                'constraint' => 60
            ]
        ]);

        $this->forge->addKey('id_review', true);

        $this->forge->createTable('review');
    }

    public function down()
    {
        $this->forge->dropTable('review');
    }
}