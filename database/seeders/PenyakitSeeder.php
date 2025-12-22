<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penyakit')->insert([
            ['kode_penyakit' => 'P1', 'nama_penyakit' => 'Depresi'],
            ['kode_penyakit' => 'P2', 'nama_penyakit' => 'Gangguan Kecemasan'],
            ['kode_penyakit' => 'P3', 'nama_penyakit' => 'Stres Akademik'],
            ['kode_penyakit' => 'P4', 'nama_penyakit' => 'Burnout (Kelelahan Mental)'],
            ['kode_penyakit' => 'P5', 'nama_penyakit' => 'Gangguan Tidur'],
            ['kode_penyakit' => 'P6', 'nama_penyakit' => 'Kecanduan Game Online'],
            ['kode_penyakit' => 'P7', 'nama_penyakit' => 'Gangguan Kepribadian Narsistik'],
        ]);
    }
}
