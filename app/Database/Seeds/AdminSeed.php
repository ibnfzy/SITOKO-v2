<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeed extends Seeder
{
    public function run()
    {
        $data = [
            'fullname' => 'Admin',
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT)
        ];

        $this->db->table('admin')->insert($data);
    }
}