<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Masukkan beberapa data contoh kelas
        Kelas::create([
            'nama_kelas' => 'XII PPLG 1',
        ]);

        Kelas::create([
            'nama_kelas' => 'XII PPLG 2',
        ]);
    }
}