<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gejala')->insert([
            ['kode_gejala' => 'G1', 'nama_gejala' => 'Sulit berkonsentrasi'],
            ['kode_gejala' => 'G2', 'nama_gejala' => 'Sering merasa lelah'],
            ['kode_gejala' => 'G3', 'nama_gejala' => 'Sulit tidur atau insomnia'],
            ['kode_gejala' => 'G4', 'nama_gejala' => 'Kehilangan semangat belajar'],
            ['kode_gejala' => 'G5', 'nama_gejala' => 'Mudah marah atau tersinggung'],
            ['kode_gejala' => 'G6', 'nama_gejala' => 'Merasa cemas berlebihan'],
            ['kode_gejala' => 'G7', 'nama_gejala' => 'Tidak bersemangat menjalani aktivitas'],
            ['kode_gejala' => 'G8', 'nama_gejala' => 'Menarik diri dari lingkungan sosial'],
            ['kode_gejala' => 'G9', 'nama_gejala' => 'Menangis tanpa alasan yang jelas'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Hilang nafsu makan'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Sering merasa sedih atau hampa'],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Merasa gagal dan tidak berharga'],
            ['kode_gejala' => 'G13', 'nama_gejala' => 'Sulit mengendalikan emosi'],
            ['kode_gejala' => 'G14', 'nama_gejala' => 'Takut menghadapi masa depan'],
            ['kode_gejala' => 'G15', 'nama_gejala' => 'Jantung berdebar tanpa sebab jelas'],
            ['kode_gejala' => 'G16', 'nama_gejala' => 'Sulit mengambil keputusan'],
            ['kode_gejala' => 'G17', 'nama_gejala' => 'Sering melamun atau pikiran kosong'],
            ['kode_gejala' => 'G18', 'nama_gejala' => 'Terlalu khawatir dengan penilaian orang lain'],
            ['kode_gejala' => 'G19', 'nama_gejala' => 'Perubahan berat badan drastis'],
            ['kode_gejala' => 'G20', 'nama_gejala' => 'Menurunnya prestasi akademik'],
        ]);
    }
}
