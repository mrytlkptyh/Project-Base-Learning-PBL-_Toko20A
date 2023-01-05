<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'TOKO 20A',
            'alamat' => 'Jl. Susuit Tubun (pasar sayur Banyuwangi)',
            'telepon' => '081946757176',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/logo.jpg',
            'path_kartu_member' => '/img/member.jpg',
        ]);
    }
}
