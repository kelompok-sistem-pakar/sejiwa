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
            ['kode_penyakit' => 'P1', 
            'nama_penyakit' => 'Depresi', 
            'rekomendasi' => 'Langkah awal yang disarankan adalah mengatur pola tidur dan waktu istirahat agar lebih teratur, serta mulai rutin melakukan aktivitas fisik ringan, seperti berjalan kaki, untuk menjaga kesehatan tubuh dan pikiran. Menuliskan perasaan atau pikiran dalam jurnal juga dapat membantu mengurangi beban emosional yang dirasakan. Selain itu, penting untuk tetap menjalin komunikasi dengan orang terdekat, baik teman maupun keluarga, sebagai sistem pendukung. Jika gejala terus berlanjut, sangat disarankan untuk berkonsultasi dengan konselor atau psikolog untuk penanganan yang tepat.'],
            ['kode_penyakit' => 'P2', 
            'nama_penyakit' => 'Gangguan Kecemasan', 
            'rekomendasi' => 'Upaya penanganan dapat dimulai dengan melatih teknik pernapasan dalam atau relaksasi guna menenangkan pikiran, serta mengurangi konsumsi kafein dan kebiasaan begadang yang dapat memicu kecemasan. Disarankan pula untuk membuat daftar aktivitas harian yang terstruktur untuk meminimalkan rasa ketidakpastian, sekaligus melatih kesadaran diri (self-awareness) terhadap hal-hal yang menjadi pemicu kecemasan. Apabila kecemasan mulai mengganggu aktivitas sehari-hari, sebaiknya segera mencari bantuan profesional.'],
            ['kode_penyakit' => 'P3', 
            'nama_penyakit' => 'Stres Akademik', 
            'rekomendasi' => 'Mahasiswa disarankan untuk memperbaiki manajemen waktu antara belajar dan istirahat, serta menyusun prioritas tugas akademik agar beban terasa lebih ringan. Hindari kebiasaan menunda pekerjaan (prokrastinasi) dan pastikan untuk mengambil jeda istirahat singkat ketika merasa lelah secara mental. Jangan ragu untuk berdiskusi dengan dosen pembimbing atau teman sebaya jika menemui kendala, karena dukungan sosial sangat penting dalam menghadapi tekanan akademik.'],
            ['kode_penyakit' => 'P4', 
            'nama_penyakit' => 'Burnout (Kelelahan Mental)', 
            'rekomendasi' => 'Untuk mengatasi kelelahan mental, disarankan mengurangi beban aktivitas secara sementara dan menetapkan batas yang jelas antara waktu belajar, bekerja, dan beristirahat. Hindari melakukan banyak tugas sekaligus (multitasking) secara berlebihan demi menjaga fokus dan energi. Melakukan aktivitas yang menyenangkan sebagai bentuk penghargaan diri (self-reward) juga sangat dianjurkan, serta mengambil waktu istirahat yang lebih panjang jika situasi memungkinkan.'],
            ['kode_penyakit' => 'P5', 
            'nama_penyakit' => 'Gangguan Tidur', 
            'rekomendasi' => 'Perbaikan kualitas tidur dapat dimulai dengan menetapkan jadwal tidur dan bangun yang konsisten setiap harinya, serta menghindari penggunaan gawai sesaat sebelum tidur. Menciptakan lingkungan tidur yang nyaman dan kondusif juga sangat penting, diiringi dengan pengurangan konsumsi makanan berat serta minuman berkafein pada malam hari. Jika gangguan tidur berlangsung dalam jangka waktu yang lama, sebaiknya berkonsultasi dengan tenaga profesional.'],
            ['kode_penyakit' => 'P6', 
            'nama_penyakit' => 'Kecanduan Game Online', 
            'rekomendasi' => 'Langkah pengendalian dapat dilakukan dengan membatasi durasi bermain game harian secara disiplin dan menetapkan jadwal khusus untuk belajar serta melakukan aktivitas non-digital. Waktu luang sebaiknya dialihkan ke aktivitas fisik atau interaksi sosial nyata. Selain meningkatkan kesadaran pribadi akan dampak negatif penggunaan game yang berlebihan, pelibatan keluarga atau lingkungan terdekat dalam proses pengawasan juga sangat direkomendasikan.'],
            ['kode_penyakit' => 'P7', 
            'nama_penyakit' => 'Gangguan Kepribadian Narsistik', 
            'rekomendasi' => 'Individu didorong untuk melatih rasa empati dan kemampuan mendengarkan orang lain secara aktif, serta melakukan refleksi diri terhadap perilaku sosial yang selama ini ditunjukkan. Disarankan untuk mulai mengurangi pencarian validasi berlebihan dari lingkungan dan lebih fokus mengembangkan kemampuan kerja sama dalam kelompok. Untuk pendampingan lanjutan yang lebih objektif dan terarah, berkonsultasi dengan tenaga profesional sangat disarankan.'],
        ]);
    }
}
