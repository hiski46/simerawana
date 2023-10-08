<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTeknologiTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('teknologi', true);
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'      => 5,
                'unsigned'      => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint'   => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('teknologi');
    }

    public function down()
    {
        $this->forge->dropTable('teknologi');
    }
}
