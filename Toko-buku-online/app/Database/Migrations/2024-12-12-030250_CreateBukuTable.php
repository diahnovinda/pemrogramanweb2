<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'judul' => [
                    'type'           => 'VARCHAR',
                    'constrain'      => 250
                ],
                'pengarang' => [
                    'type'           => 'VARCHAR',
                    'constrain'      => 250
                ],
                'penerbit' => [
                    'type'           => 'VARCHAR',
                    'constrain'      => 250
                ],
                'tahun' => [
                    'type'           => 'INT',
                    'constrain'      => 5
                ],
                'thumbnail_url' => [
                    'type'           => 'VARCHAR',
                    'constrain'      => 250
                ]
            ]
        );
        $this->forge->addkey('id',  true);
        $this->forge->CreateTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
