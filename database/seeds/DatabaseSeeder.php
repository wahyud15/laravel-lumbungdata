<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Insert Tahun Data
        DB::table('mtahundata')->insert([
            ['id' => 2010],['id' => 2011],['id' => 2012],['id' => 2013],['id' => 2014],['id' => 2015],['id' => 2016],['id' => 2017],['id' => 2018],['id' => 2019],['id' => 2020],
            ['id' => 2021],['id' => 2022],['id' => 2023],['id' => 2024],['id' => 2025],['id' => 2026],['id' => 2027],['id' => 2028],['id' => 2029],['id' => 2030],['id' => 2031],
        ]);

        //Insert Administrative Level
        DB::table('madministrativelevel')->insert([
            ["nama_administrativelevel" => "Provinsi"],
            ["nama_administrativelevel" => "Kabupaten/Kota"],
        ]);

        //Insert Minstansi
        DB::table('minstansi')->insert([
            ["nama_instansi" => "Badan Pusat Statistik"],
            ["nama_instansi" => "Dinas Pemberdayaan Masyarakat Pemerintahan Desa Kependudukan dan Pencatatan Sipil"],
        ]);

        //Insert Turunan Instansi
        DB::table('turunaninstansi')->insert([
            ["nama_instansi" => "Badan Pusat Statistik Nusa Tenggara Barat", 'minstansi_id' => 1, 'madministrativelevel_id' => 1],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Lombok Barat", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Lombok Tengah", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Lombok Timur", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Sumbawa", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Dompu", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Bima", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Sumbawa Barat", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kabupaten Lombok Utara", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kota Mataram", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],
            ["nama_instansi" => "Badan Pusat Statistik Kota Bima", 'minstansi_id' => 1, 'madministrativelevel_id' => 2],

            ["nama_instansi" => "Dinas Pemberdayaan Masyarakat Pemerintahan Desa Kependudukan dan Pencatatan Sipil Provinsi Nusa Tenggara Barat", 'minstansi_id' => 2, 'madministrativelevel_id' => 1],
            ["nama_instansi" => "Dinas Pemberdayaan Masyarakat Pemerintahan Desa Kependudukan dan Pencatatan Sipil Kabupaten Lombok Barat", 'minstansi_id' => 2, 'madministrativelevel_id' => 2],
        ]);

        //Insert User
        DB::table('users')->insert([
            ['name' => 'superadmin', 'email' => 'wahyudi.septiawan@bps.go.id', 'password' => bcrypt('1'), 'level' => '20', 'turunaninstansi_id' => 1],
            ['name' => 'Badan Pusat Statistik Provinsi Nusa Tenggara Barat', 'email' => 'bps_ntb@gmail.com', 'password' => bcrypt('1'), 'level' => '10', 'turunaninstansi_id' => 1],
            ['name' => 'Badan Pusat Statistik Kabupaten Lombok Barat', 'email' => 'bps_lombar@gmail.com', 'password' => bcrypt('1'), 'level' => '10', 'turunaninstansi_id' => 2],
            ['name' => 'Badan Pusat Statistik Kabupaten Lombok Tengah', 'email' => 'bps_lomteng@gmail.com', 'password' => bcrypt('1'), 'level' => '10', 'turunaninstansi_id' => 3],
            ['name' => 'Badan Pusat Statistik Kabupaten Lombok Timur', 'email' => 'bps_lomtim@gmail.com', 'password' => bcrypt('1'), 'level' => '10', 'turunaninstansi_id' => 4],

            ['name' => 'DPMPD DUKCAPIL Provinsi Nusa Tenggara Barat', 'email' => 'capil_ntbn@gmail.com', 'password' => bcrypt('1'), 'level' => '10', 'turunaninstansi_id' => 12],
            ['name' => 'DPMPD DUKCAPIL Kabupaten Lombok Barat', 'email' => 'capil_lombar@gmail.com', 'password' => bcrypt('1'), 'level' => '10', 'turunaninstansi_id' => 13],
        ]);

        //Insert Msubjek
        DB::table('msubjek')->insert([
            ['id' => 1, 'nama_subjek' => 'Sosial Kependudukan'],
            ['id' => 2, 'nama_subjek' => 'Pertanian Kehutanan'],
            ['id' => 3, 'nama_subjek' => 'Ekonomi Perdagangan'],
        ]);

        //Insert Satuan
        DB::table('msatuan')->insert([
            ['id' => 1, 'nama_satuan' => 'Jiwa'],
            ['id' => 2, 'nama_satuan' => 'Ton'],
            ['id' => 3, 'nama_satuan' => 'Hektar'],
        ]);

        //Insert Periode Waktu
        DB::table('mperiodewaktu')->insert([
            ['id' => 1, 'nama_periode' => 'Triwulanan'],
        ]);

        //Insert Turunan Periode Waktu
        DB::table('mperiodewaktuitems')->insert([
            ['id' => 1, 'no_urut' => 1, 'nama_items' => 'Triwulan I', 'mperiode_id' => 1,],
            ['id' => 2, 'no_urut' => 2, 'nama_items' => 'Triwulan II', 'mperiode_id' => 1,],
            ['id' => 3, 'no_urut' => 3, 'nama_items' => 'Triwulan III', 'mperiode_id' => 1,],
            ['id' => 4, 'no_urut' => 4, 'nama_items' => 'Triwulan IV', 'mperiode_id' => 1,],
        ]);

        //Insert Karakteristik
        DB::table('mkarakteristik')->insert([
            ['id' => 1, 'nama_karakteristik' => 'Jenis Sawah'],
        ]);

        //Insert Turunan Karakteristik
        DB::table('mkarakteristikitems')->insert([
            ['id' => 1, 'no_urut' => '1', 'nama_items' => 'Sawah Irigasi', 'mkarakteristik_id' => 1],
            ['id' => 2, 'no_urut' => '2', 'nama_items' => 'Sawah Ladang', 'mkarakteristik_id' => 1],
        ]);

        //Insert Baris
        DB::table('mbaris')->insert([
            ['id' => 1, 'nama_baris' => 'Provinsi Nusa Tenggara Barat'],
            ['id' => 2, 'nama_baris' => 'Kabupaten Lombok Barat'],
            ['id' => 3, 'nama_baris' => 'Kabupaten Lombok Tengah'],
            ['id' => 4, 'nama_baris' => 'Kabupaten Lombok Timur'],
            ['id' => 5, 'nama_baris' => 'Kabupaten Sumbawa'],
            ['id' => 6, 'nama_baris' => 'Kabupaten Dompu'],
            ['id' => 7, 'nama_baris' => 'Kabupaten Bima'],
            ['id' => 8, 'nama_baris' => 'Kabupaten Sumbawa Barat'],
            ['id' => 9, 'nama_baris' => 'Kabupaten Lombok Utara'],
            ['id' => 10, 'nama_baris' => 'Kota Mataram'],
            ['id' => 11, 'nama_baris' => 'Kota Bima'],
        ]);

        //Insert Baris Items
        DB::table('mbarisitems')->insert([
            ['id' => 1, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 2, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 3, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 4, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 5, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 6, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 7, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 8, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 9, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 10, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 11, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
        ]);

        //Insert Indikator
        DB::table('mindikator')->insert([
            ['id' => 1, 'nama_indikator' => 'Luas Sawah Berdasarkan Jenis Sawah', 'deskripsi_indikator' => " ", 'keterangan_indikator' => " ", 'mbaris_id' => 1, 'mkarakteristik_id' => 1, 'mperiode_id' => 1, 'msatuan_id' => 3, 'msubjek_id' => 2],
        ]);

        //Insert Transaksi Indikator
        DB::table('transaksiindikator')->insert([
            ['id' => 1, 'nama_transaksi_indikator' => 'Luas Sawah Berdasarkan Jenis Sawah Kabupaten Lombok Barat','mindikator_id' => 1, 'madministrativelevel_id' => 2, 'user_id' => 3],
        ]);

        //Insert Data Template 1
        // DB::table('datatmpl1')->insert([
        //     ['id' => 1, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 1],
        //     ['id' => 2, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 1],
        //     ['id' => 3, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 1],
        //     ['id' => 4, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 2],
        //     ['id' => 5, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 2],
        //     ['id' => 6, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 2],
        //     ['id' => 7, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 3],
        //     ['id' => 8, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 3],
        //     ['id' => 9, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 3],
        //     ['id' => 10, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 4],
        //     ['id' => 11, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 4],
        //     ['id' => 12, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 4],
        //     ['id' => 13, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 1],
        //     ['id' => 14, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 1],
        //     ['id' => 15, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 1],
        //     ['id' => 16, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 2],
        //     ['id' => 17, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 2],
        //     ['id' => 18, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 2],
        //     ['id' => 19, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 3],
        //     ['id' => 20, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 3],
        //     ['id' => 21, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 3],
        //     ['id' => 22, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 4],
        //     ['id' => 23, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 4],
        //     ['id' => 24, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 4],
        // ]);

    }
}
