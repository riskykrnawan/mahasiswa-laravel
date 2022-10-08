<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodis = [
            [
                "logo" => "bi-emoji-smile-upside-down",
                "nama" => "Informatika",
                "fakultas" => "Teknik"
            ],
            [
                "logo" => "bi-emoji-smile",
                "nama" => "Akuntansi",
                "fakultas" => "Ekonomi Dan Bisnis"
            ],
            [
                "logo" => "bi-emoji-sunglasses",
                "nama" => "Fisika",
                "fakultas" => "Matematika dan Ilmu Pengetahuan Alam"
            ]
        ];

        foreach ($prodis as $prodi) {
            Prodi::create([
                'logo' => $prodi["logo"],
                'nama' => $prodi["nama"],
                'fakultas' => $prodi["fakultas"]
            ]);
        }
    }
}
