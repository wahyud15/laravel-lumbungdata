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
        //Insert User
        DB::table('users')->insert([
            ['name' => 'superadmin', 'email' => 'wahyudi.septiawan@bps.go.id', 'password' => bcrypt('1'), 'level' => '20'],
            ['name' => 'adminbps', 'email' => 'wahyu.d.septiwaan@gmail.com', 'password' => bcrypt('1'), 'level' => '15'],
        ]);

        //
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
            ['id' => 1, 'nama_baris' => 'Kabupaten/Kota'],
        ]);

        //Insert Baris Items
        DB::table('mbarisitems')->insert([
            ['id' => 1, 'no_urut' => 1, 'nama_items' => 'LOMBOK BARAT', 'mbaris_id' => 1],
            ['id' => 2, 'no_urut' => 2, 'nama_items' => 'LOMBOK TENGAH', 'mbaris_id' => 1,],
            ['id' => 3, 'no_urut' => 3, 'nama_items' => 'LOMBOK TIMUR', 'mbaris_id' => 1,],
        ]);

        //Insert Indikator
        DB::table('mindikator')->insert([
            ['id' => 1, 'nama_indikator' => 'Luas Sawah Berdasarkan Jenis Sawah', 'deskripsi_indikator' => " ", 'keterangan_indikator' => " ", 'mbaris_id' => 1, 'mkarakteristik_id' => 1, 'mperiode_id' => 1, 'msatuan_id' => 3, 'msubjek_id' => 2],
        ]);

        //Insert Data Template 1
        DB::table('datatmpl1')->insert([
            ['id' => 1, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 1],
            ['id' => 2, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 1],
            ['id' => 3, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 1],
            ['id' => 4, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 2],
            ['id' => 5, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 2],
            ['id' => 6, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 2],
            ['id' => 7, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 3],
            ['id' => 8, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 3],
            ['id' => 9, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 3],
            ['id' => 10, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 1, 'nu_periode' => 4],
            ['id' => 11, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 2, 'nu_periode' => 4],
            ['id' => 12, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 1, 'nu_baris' => 3, 'nu_periode' => 4],
            ['id' => 13, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 1],
            ['id' => 14, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 1],
            ['id' => 15, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 1],
            ['id' => 16, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 2],
            ['id' => 17, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 2],
            ['id' => 18, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 2],
            ['id' => 19, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 3],
            ['id' => 20, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 3],
            ['id' => 21, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 3],
            ['id' => 22, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 1, 'nu_periode' => 4],
            ['id' => 23, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 2, 'nu_periode' => 4],
            ['id' => 24, 'id_indikator' => 1, 'tahun' => '2011', 'nu_karakteristik' => 2, 'nu_baris' => 3, 'nu_periode' => 4],
        ]);
    }
}
