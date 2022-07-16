<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            "title" => "Apakah benar Marlin gratis?",
            "description" => "Ya, kamu bisa mencoba menggunakan Kledo gratis selama 14 hari. Ada juga paket gratis selamanya:)"
        ]);

        Question::create([
            "title" => "Bagaimana perhitungan biaya Marlin?",
            "description" => "Biayanya flat, 139rb per bulan, atau dapatkan diskon 10% untuk pembayaran langsung 1 tahun."
        ]);

        Question::create([
            "title" => "Apa yang dibutuhkan untuk menggunakan Marlin?",
            "description" => "Tidak ada. Anda hanya memerlukan komputer beserta koneksi internet."
        ]);

        Question::create([
            "title" => "Apakah ada biaya tambahan untuk Live Support 24jam?",
            "description" => "Tidak. 100% gratis, kapanpun dan dimanapun."
        ]);
    }
}
