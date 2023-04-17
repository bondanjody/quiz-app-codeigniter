<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'soal' => 'Openwave SDK adalah tool untuk membuat aplikasi',
                'pilihan1'    => 'Machine yang dibuat opensource',
                'pilihan2'    => 'Nirkabel yang dibuat openwave',
                'pilihan3'    => 'Machine yang dibuat openwave',
                'pilihan4'    => 'Nirkabel yang dibuat microwave',
                'pilihan5'    => 'Nirkabel yang dibuat opensource',
                'jawaban'    => 'Nirkabel yang dibuat openwave',
                'matakuliah'    => 'Mobile Commerce',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'soal' => 'Dalam proses evolusi markup language untuk microbrowser, terdapat perintah-perintah HTML yang digunakan. Apa kepanjangan dari HTML ...',
                'pilihan1'    => 'Hypertext Machine Learning',
                'pilihan2'    => 'Hypertext Markup Learning',
                'pilihan3'    => 'Hypertheme Markup Language',
                'pilihan4'    => 'Hypertext Markup Language',
                'pilihan5'    => 'Hypertext Machine Language',
                'jawaban'    => 'Hypertext Markup Language',
                'matakuliah'    => 'Mobile Commerce',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'soal' => 'Penambahan fitur baru di antaranya meningkatkan input keyboard, desain baru fitur pencarian, UI yang baru dan lebih lembut, dan pencarian melalui Voice Search yang lebih cepat merupakan Android versi ...',
                'pilihan1'    => 'Ice Cream Sandwich',
                'pilihan2'    => 'Jelly Bean',
                'pilihan3'    => 'Cupcake',
                'pilihan4'    => 'Astro',
                'pilihan5'    => 'Lollipop',
                'jawaban'    => 'Jelly Bean',
                'matakuliah'    => 'Mobile Commerce',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'soal' => 'Android versi 1.0 disebut juga android ...',
                'pilihan1'    => 'Lollipop',
                'pilihan2'    => 'Astro',
                'pilihan3'    => 'Bender',
                'pilihan4'    => 'Ice Cream Sandwich',
                'pilihan5'    => 'Cupcake',
                'jawaban'    => 'Astro',
                'matakuliah'    => 'Mobile Commerce',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'soal' => 'Google mengeluarkan produk dan layanan GPay atau disebut juga dengan ...',
                'pilihan1'    => 'Google Drive',
                'pilihan2'    => 'Google Mail',
                'pilihan3'    => 'Google Wallet',
                'pilihan4'    => 'Google Spreadsheet',
                'pilihan5'    => 'Google Card',
                'jawaban'    => 'Google Wallet',
                'matakuliah'    => 'Mobile Commerce',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];

        // Using Query Builder
        $this->db->table('quiz')->insertBatch($data);
    }
}