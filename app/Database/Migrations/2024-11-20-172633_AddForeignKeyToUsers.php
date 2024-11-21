<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignKeyToUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'CONSTRAINT `fk_users_jurusan` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan`(`id`) ON DELETE CASCADE ON UPDATE CASCADE',
        ]);
    }

    public function down()
    {
        $this->forge->dropForeignKey('users', 'fk_users_jurusan');
    }
}
