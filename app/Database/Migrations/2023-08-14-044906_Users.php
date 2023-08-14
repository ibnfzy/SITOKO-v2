<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 150
            ],
            'password' => [
                'type' => 'TEXT'
            ],
            'kontak' => [
                'type' => 'VARCHAR',
                'constraint' => 13,
                'null' => true
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'level_user VARCHAR(150) DEFAULT "PELANGGAN BARU"'
        ]);

        $this->forge->addKey('id_user', true);

        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}