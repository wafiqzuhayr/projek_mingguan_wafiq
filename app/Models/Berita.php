<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Perkembangan Kecerdasan Buatan Semakin Pesat di Indonesia",
            "slug" => "Perkembangan Kecerdasan Buatan Semakin Pesat di Indonesia",
            "penulis" => "Teknologi",
            "konten" => "Perkembangan teknologi kecerdasan buatan (AI) di Indonesia menunjukkan kemajuan pesat dalam beberapa tahun terakhir. Berbagai sektor, mulai dari pendidikan, kesehatan, hingga industri kreatif, kini mulai memanfaatkan teknologi ini untuk meningkatkan efisiensi dan produktivitas.

Salah satu contoh penerapan AI dapat dilihat pada layanan pelanggan berbasis chatbot yang mampu merespons pertanyaan pengguna secara otomatis dan cepat. Selain itu, startup lokal juga mulai mengembangkan sistem analisis data menggunakan AI untuk membantu perusahaan mengambil keputusan yang lebih tepat.

Pemerintah Indonesia pun berkomitmen untuk mendukung pengembangan teknologi ini melalui berbagai program pelatihan digital dan kerja sama dengan universitas serta perusahaan teknologi besar. Diharapkan, pemanfaatan AI dapat menjadi motor penggerak ekonomi digital nasional di masa depan.",
        ],
        [
            "judul" => "Peluncuran Satelit Merah Putih 3 Sukses Dilakukan",
            "slug" => "Peluncuran-satelit-merah-putih-3-sukses-dilakukan",
            "penulis" => "parel",
            "konten" => "Indonesia kembali mencatat sejarah penting di bidang teknologi antariksa setelah sukses meluncurkan Satelit Merah Putih 3 pada Selasa, 30 September 2025. Satelit yang diluncurkan dari Kennedy Space Center, Amerika Serikat, ini akan memperkuat jaringan komunikasi nasional sekaligus mendukung pengembangan internet di daerah terpencil. Menteri Komunikasi menyatakan bahwa satelit ini menjadi langkah strategis dalam mewujudkan pemerataan akses digital di seluruh wilayah Indonesia.",
        ],
        [
            "judul" => "AI Makin Canggih",
            "slug" => "ai-makin-canggih",
            "penulis" => "Ahok",
            "konten" => "Kecerdasan buatan (AI) berkembang pesat dan kini banyak diterapkan di berbagai bidang, mulai dari kesehatan, transportasi, hingga pendidikan. Meski membantu manusia, pakar mengingatkan agar AI digunakan secara bijak. Regulasi yang jelas sangat dibutuhkan untuk mencegah penyalahgunaan teknologi ini.",
        ],
    ];

public static function ambildata()
    {
        return Self::$data_berita;
    }

    public static function caridata($slug)
    {
        $data_beritas = Self::$data_berita;
   
   $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }
    return $new_berita;
    }
}
