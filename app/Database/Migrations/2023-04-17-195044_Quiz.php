<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Quiz extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'soal' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pilihan1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pilihan2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pilihan3' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pilihan4' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jawaban' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'matakuliah' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('quiz');
    }

    public function down()
    {
        $this->forge->dropTable('quiz');
    }
}
