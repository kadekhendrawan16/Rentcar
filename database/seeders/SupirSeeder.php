<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_supir')->insert([
            'nama_supir' => 'Tidak Menyewa Supir',
        ]);

        DB::table('tb_supir')->insert([
            'nama_supir' => 'Yanto',
        ]);

        DB::table('tb_supir')->insert([
            'nama_supir' => 'Sumanto',
        ]);

        DB::table('tb_supir')->insert([
            'nama_supir' => 'Udin',
        ]);
    }
}
