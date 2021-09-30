<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posts extends Migration
{
    public function up()
    {
            $this->forge->addField([
                    'post_id'          => [
                        'type'           => 'INT',
                        'constraint'     => 5,
                        'unsigned'       => true,
                        'auto_increment' => true,
                    ],
                    'post_title'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => 100,
                    ],
                    'post_description' => [
                        'type' => 'TEXT',
                        'null' => true,
                    ],
                    'post_image'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => 150,
                        'null' => true,
                    ],
                    'post_author'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => 100,
                    ],
                    'post_category'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => 100,
                    ],
                    'post_slug'       => [
                        'type'       => 'VARCHAR',
                        'constraint' =>100,
                        'unique' => true,
                    ],
                    'created_at' => [
                        'type' => 'DATETIME',
                        'null' => true,
                    ],
                    'updated_at' => [
                        'type' => 'DATETIME',
                        'null' => true,
                    ]
        ]);
            $this->forge->addKey('post_id', true);
            $this->forge->createTable('posts');
    }

    public function down()
    {
            $this->forge->dropTable('posts');
    }
}