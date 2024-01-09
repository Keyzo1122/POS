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
            'nama_perusahaan' => 'Toko Ku',
            'alamat' => 'Jl. Salak 1 Ngembik Magelang',
            'telepon' => '082123192312',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/me.png',
            'path_kartu_member' => '/img/me.png',
        ]);
    }
}
