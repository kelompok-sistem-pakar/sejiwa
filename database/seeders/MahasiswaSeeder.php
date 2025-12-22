<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            ['nim' => '231120199', 'nama_mahasiswa' => 'Oppi Amalia', 'umur' => 24, 'jenis_kelamin' => 'P'],
            ['nim' => '240710166', 'nama_mahasiswa' => 'Anita Tania', 'umur' => 19, 'jenis_kelamin' => 'P'],
            ['nim' => '211110103', 'nama_mahasiswa' => 'Iqbal Rafid', 'umur' => 19, 'jenis_kelamin' => 'L'],
            ['nim' => '231110168', 'nama_mahasiswa' => 'Cabriella Vanesa Kawulusan', 'umur' => 18, 'jenis_kelamin' => 'P'],
            ['nim' => '231110123', 'nama_mahasiswa' => 'Sakinah Sutia Azahra', 'umur' => 19, 'jenis_kelamin' => 'P'],
        ]);
    }
}
