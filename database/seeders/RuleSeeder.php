<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Rules berdasarkan tabel pakar
        DB::table('rule')->insert([
            // --- Rule 1: P1 (Depresi) ---
            // Gejala: G4, G7, G9, G11, G12
            ['penyakit_id' => 1, 'gejala_id' => 4,  'cf_pakar' => 0.8],
            ['penyakit_id' => 1, 'gejala_id' => 7,  'cf_pakar' => 0.6],
            ['penyakit_id' => 1, 'gejala_id' => 9,  'cf_pakar' => 0.9],
            ['penyakit_id' => 1, 'gejala_id' => 11, 'cf_pakar' => 0.7],
            ['penyakit_id' => 1, 'gejala_id' => 12, 'cf_pakar' => 0.5],

            // --- Rule 2: P2 (Gangguan Kecemasan) ---
            // Gejala: G6, G10, G14, G15, G18
            ['penyakit_id' => 2, 'gejala_id' => 6,  'cf_pakar' => 0.7],
            ['penyakit_id' => 2, 'gejala_id' => 10, 'cf_pakar' => 0.8],
            ['penyakit_id' => 2, 'gejala_id' => 14, 'cf_pakar' => 0.6],
            ['penyakit_id' => 2, 'gejala_id' => 15, 'cf_pakar' => 0.7],
            ['penyakit_id' => 2, 'gejala_id' => 18, 'cf_pakar' => 0.4],

            // --- Rule 3: P3 (Stres Akademik) ---
            // Sesuai request tabel kamu
            ['penyakit_id' => 3, 'gejala_id' => 1,  'cf_pakar' => 0.6],
            ['penyakit_id' => 3, 'gejala_id' => 4,  'cf_pakar' => 0.8],
            ['penyakit_id' => 3, 'gejala_id' => 16, 'cf_pakar' => 0.7],
            ['penyakit_id' => 3, 'gejala_id' => 20, 'cf_pakar' => 0.6],

            // --- Rule 4: P4 (Burnout) ---
            // Gejala: G2, G3, G4, G7, G19
            ['penyakit_id' => 4, 'gejala_id' => 2,  'cf_pakar' => 0.5],
            ['penyakit_id' => 4, 'gejala_id' => 3,  'cf_pakar' => 0.6],
            ['penyakit_id' => 4, 'gejala_id' => 4,  'cf_pakar' => 0.8], // G4 muncul lagi disini (common symptom)
            ['penyakit_id' => 4, 'gejala_id' => 7,  'cf_pakar' => 0.5],
            ['penyakit_id' => 4, 'gejala_id' => 19, 'cf_pakar' => 0.9],

            // --- Rule 5: P5 (Gangguan Tidur) ---
            // Gejala: G3, G5, G13
            ['penyakit_id' => 5, 'gejala_id' => 3,  'cf_pakar' => 0.7],
            ['penyakit_id' => 5, 'gejala_id' => 5,  'cf_pakar' => 0.8],
            ['penyakit_id' => 5, 'gejala_id' => 13, 'cf_pakar' => 0.9],

            // --- Rule 6: P6 (Kecanduan Game Online) ---
            // Gejala: G1, G4, G7, G17, G20
            ['penyakit_id' => 6, 'gejala_id' => 1,  'cf_pakar' => 0.5],
            ['penyakit_id' => 6, 'gejala_id' => 4,  'cf_pakar' => 0.6],
            ['penyakit_id' => 6, 'gejala_id' => 7,  'cf_pakar' => 0.5],
            ['penyakit_id' => 6, 'gejala_id' => 17, 'cf_pakar' => 0.9], // Gejala khas game
            ['penyakit_id' => 6, 'gejala_id' => 20, 'cf_pakar' => 0.7],

            // --- Rule 7: P7 (Gangguan Kepribadian Narsistik) ---
            // Gejala: G5, G13, G18
            ['penyakit_id' => 7, 'gejala_id' => 5,  'cf_pakar' => 0.6],
            ['penyakit_id' => 7, 'gejala_id' => 13, 'cf_pakar' => 0.5],
            ['penyakit_id' => 7, 'gejala_id' => 18, 'cf_pakar' => 0.8],
        ]);
        
    }
}
