<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
                'id' => '1', //id opsional
                'nama' => 'Risky',
                'nim' => '12344',
                'jurusan' => 'Informatika',
            ],
            [
                'id' => '2',
                'nama' => 'Kurniawan',
                'nim' => '12345',
                'jurusan' => 'Sistem Informatika',
            ]
        ];

        foreach ($mahasiswa as $mhs) {
            Mahasiswa::firstOrCreate($mhs);
        }

    }
}
