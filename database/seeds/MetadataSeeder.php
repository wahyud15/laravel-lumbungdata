<?php

use Illuminate\Database\Seeder;

class MetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Insert Metadata
        /*
        DB::table('metadata')->insert([
            ['id' => 1, 'nama' => "Angka Harapan Hidup (AHH)", 'kondef' => "Angka Harapan Hidup adalah rata-rata tahun hidup yang masih akan dijalani oleh seseorang yang telah berhasil mencapai umur x, pada suatu tahun tertentu, dalam situasi mortalitas yang berlaku di lingkngan masyarakatnya.", 'kegunaan' => "Angka Harapan Hidup merupakan alat untuk mengevaluasi kinerja pemerintah dalam meningkatkan kesejahteraan penduduk pada umumnya, dan meningkatkan derajat kesehatan pada khususnya. Angka Harapan Hidup yang rendah di suatu daerah harus diikuti dengan program pembangunan kesehatan, dan program sosial lainnya termasuk kesehatan lingkungan, kecukupan gizi dan kalori termasuk program pemberantasan kemiskinan.", 'interpretasi' => "Angka Harapan Hidup yang terhitung untuk Indonesia dari Sensus Penduduk tahun 1971 adalah 47,7 tahun, artinya bayi-bayi yang dilahirkan menjelang tahun 1971 (periode 1967-1969) akan dapat hidup sampai 47 atau 48 tahun. Tetapi bayi-bayi yang dilahirkan menjelang tahn 1980 mempunyai usia harapan hidup lebih panjang yakni 52,2 tahun, meningkat lagi menjadi 59,8 tahun untuk bayi yang dilahirkan menjelang tahun 1990, dan bayi yang dilahirkan tahun 2000 usia harapan hidupnya mencapai 65,5 tahun. Peningkatan Angka Harapan Hidup ini menunjukkan adanya peningkatan kehidupan dan kesejahteraan bangsa Indonesia selama 30 tahun terakhir dari tahun 1970-an sampai tahun 2000."],
            ['id' => 2, 'nama' => "Air Minum Layak", 'kondef' => "Air minum yang berkualitas (layak) adalah air minum yang terlindung meliputi air ledeng (keran), keran umum, hydrant umum, terminal air, penampungan air hujan (PAH) atau mata air dan sumur terlindung, sumur bor atau sumur pompa, yang jaraknya minimal 10 m dari pembuangan kotoran, penampungan limbah dan pembuangan sampah. Tidak termasuk air kemasan, air dari penjual keliling, air yang dijual melalui tanki, air sumur dan mata air tidak terlindung. Proporsi rumah tangga dengan akses berkelanjutan terhadap air minum layak adalah perbandingan antara rumah tangga dengan akses terhadap sumber air minum berkualitas (layak) dengan rumah tangga seluruhnya, dinyatakan dalam persentase.", 'kegunaan' => NULL, 'interpretasi' => NULL],
            ['id' => 3, 'nama' => "Persentase Penduduk Dg Keluhan Kesehatan", 'kondef' => "Keluhan kesehatan adalah gangguan terhadap kondisi fisik maupun jiwa, termasuk karena kecelakaan, atau hal lain yang menyebabkan terganggunya kegiatan sehari-hari. Pada umumnya keluhan kesehatan utama yang banyak dialami oleh penduduk adalah panas, sakit kepala, batuk, pilek, diare, asma/sesak nafas, sakit gigi. Orang yang menderita penyakit kronis dianggap mempunyai keluhan kesehatan walaupun pada waktu survei (satu bulan terakhir) yang bersangkutan tidak kambuh penyakitnya.", 'kegunaan' => "Indikator ini dapat dimanfaatkan untuk mengukur tingkat kesehatan masyarakat secara umum yang dilihat dari adanya keluhan yang mengindikasikan terkena suatu penyakit tertentu. Pengetahuan mengenai derajat kesehatan suatu masyarakat dapat menjadi pertimbangan dalam pembangunan bidang kesehatan, yang bertujuan agar semua lapisan masyarakat memperoleh pelayanan kesehatan secara mudah, murah dan merata. Melalui upaya tersebut, diharapkan akan tercapai derajat kesehatan masyarakat yang lebih baik.", 'interpretasi' => "Semakin banyak penduduk yang mengalami keluhan kesehatan berarti semakin rendah derajat kesehatan dari masyarakat bersangkutan."],
            ['id' => 4, 'nama' => "Pengeluaran Perkapita Yang Disesuaikan", 'kondef' => "Pengeluaran Perkapita Riil Yang Disesuaikan (Daya Beli) adalah kemampuan masyarakat dalam membelanjakan uangnya dalam bentuk barang maupun jasa.", 'kegunaan' => "Menggambarkan tingkat kesejahteraan yang dinikmati oleh penduduk sebagai dampak semakin membaiknya ekonomi.", 'interpretasi' => "Kemampuan daya beli antar daerah berbeda-beda dengan rentang tertinggi 732.720 dan yang terendah 360.000. Semakin rendahnya nilai daya beli suatu masyarakat berkaitan erat dengan kondisi perekonomian pada saat itu yang sedang memburuk yang berarti semakin rendah kemampuan masyarakat membeli suatu barang atau jasa."],
            ['id' => 5, 'nama' => "Total Nilai Ekspor Indonesia", 'kondef' => "Total Nilai Ekspor Indonesia merupakan kompilasi nilai ekspor FOB (Free on Board) barang-barang ekspor yang keluar dari daerah Pabean Indonesia. Nilai FOB berarti nilai suatu barang yang dinyatakan dalam FOB (Free on Board).", 'kegunaan' => "Mengetahui total nilai ekspor Indonesia.", 'interpretasi' => "Menunjukkan total nilai FOB ekspor yang keluar dari Indonesia (dalam USD)."],
            ['id' => 6, 'nama' => "Angka Partisipasi Murni (APM)", 'kondef' => "Proporsi penduduk pada kelompok umur jenjang pendidikan tertentu yang masih bersekolah terhadap penduduk pada kelompok umur tersebut. Sejak tahun 2007, Pendidikan Non Formal (Paket A, Paket B, dan Paket C) turut diperhitungkan.", 'kegunaan' => "Untuk mengukur daya serap sistem pendidikan terhadap penduduk usia sekolah", 'interpretasi' => "APM menunjukkan seberapa banyak penduduk usia sekolah yang sudah dapat memanfaatkan fasilitas pendidikan sesuai pada jenjang pendidikannya. Jika APM = 100, berarti seluruh anak usia sekolah dapat bersekolah tepat waktu"],
            ['id'=>6, 'nama'=>"Garis Kemiskinan", 'kondef'=>"Garis Kemiskinan merupakan representasi dari jumlah rupiah minimum yang dibutuhkan untuk memenuhi kebutuhan pokok minimum makanan yang setara dengan 2100 kilo kalori per kapita per hari dan kebutuhan pokok bukan makanan.", 'kegunaan'=>"Untuk mengukur beberapa indikator kemiskinan, seperti jumlah dan persentase penduduk miskin (headcount index-Po), indeks kedalaman kemiskinan (poverty gap index-P1), dan indeks keparahan kemiskinan (poverty severity index-P2).", 'interpretasi'=>"Garis kemiskinan menunjukkan jumlah rupiah minimum yang dibutuhkan untuk memenuhi kebutuhan pokok minimum makanan yang setara dengan 2100 kilo kalori per kapita per hari dan kebutuhan pokok bukan makanan. Penduduk yang memiliki rata-rata pengeluaran konsumsi per kapita per bulan di bawah garis kemiskinan dikategorikan sebagai penduduk miskin."],
        ]);
        */
        Eloquent::unguard();
        $this->command->info('Import Tabel Metadata');

        $path = 'database/seeds/metadata.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Tabel Metadata sudah di import');
    }
}
