<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'     => TRUE,
                'auto_increment' => TRUE,
                'constraint' => '100'
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'phone' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'user_type' => [
                'type' => 'ENUM("admin","user")',
                'default' => 'user',
                'null' => FALSE
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
