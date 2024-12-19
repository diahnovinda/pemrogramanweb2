<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createpelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'id_pelanggan' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'id_user' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'nama' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255,
                ],
                'no_hp' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 16,
                ],
                'alamat' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255
                ]
          ]);

          $this->forge->addkey('id_pelanggan', true);
          $this->forge->addforignkey('id_user', 'users', 'id');
          $this->forge->CreateTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
