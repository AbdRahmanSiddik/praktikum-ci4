<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_jurusan' => 'Informatika'],
            ['nama_jurusan' => 'Sistem Informasi'],
            ['nama_jurusan' => 'Teknik Industri'],
            ['nama_jurusan' => 'Manajemen'],
            ['nama_jurusan' => 'Akuntansi'],
        ];

        // Menyisipkan data ke tabel jurusan
        $this->db->table('jurusan')->insertBatch($data);
    }
}
