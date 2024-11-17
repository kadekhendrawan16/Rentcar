<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'McLaren P1',
            'id_kategori' => '1',
            'plat_mobil' => 'DK 1234 A',
            'nama_supir' => 'Tidak Menyewa Supir',
            'harga_sewa' => 1990000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Lotus Evija',
            'id_kategori' => '1',
            'plat_mobil' => 'DK 1678 B',
            'nama_supir' => 'Tidak Menyewa Supir',
            'harga_sewa' => 900000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Toyota Avanza',
            'id_kategori' => '2',
            'plat_mobil' => 'DK 6789 A',
            'nama_supir' => 'Muklis',
            'harga_sewa' => 300000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Toyota Agya',
            'id_kategori' => '2',
            'plat_mobil' => 'DK 1239 O',
            'nama_supir' => 'Yanto',
            'harga_sewa' => 500000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Jeep Wrangler',
            'id_kategori' => '3',
            'plat_mobil' => 'DK 6573 T',
            'nama_supir' => 'Santoso',
            'harga_sewa' => 550000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Toyota Alphard',
            'id_kategori' => '3',
            'plat_mobil' => 'DK 8452 H',
            'nama_supir' => 'Sumanto',
            'harga_sewa' => 600000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Bugatti Veyron',
            'id_kategori' => '1',
            'plat_mobil' => 'DK 9839 FBK',
            'nama_supir' => 'Tidak Menyewa Supir',
            'harga_sewa' => 1200000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Mercedes-AMG GT',
            'id_kategori' => '1',
            'plat_mobil' => 'DK 3956 OB',
            'nama_supir' => 'Tidak Menyewa Supir',
            'harga_sewa' => 950000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Toyota Calya',
            'id_kategori' => '2',
            'plat_mobil' => 'DK 1449 PO',
            'nama_supir' => 'Udin',
            'harga_sewa' => 250000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Daihatsu Terios',
            'id_kategori' => '2',
            'plat_mobil' => 'DK 7749 PO',
            'nama_supir' => 'Danang',
            'harga_sewa' => 500000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Rolls-Royce',
            'id_kategori' => '3',
            'plat_mobil' => 'DK 8439 AE',
            'nama_supir' => 'Ucup',
            'harga_sewa' => 1750000,
        ]);

        DB::table('tb_mobil')->insert([
            'nama_mobil' => 'Mercedes E-Class',
            'id_kategori' => '3',
            'plat_mobil' => 'DK 3480 YT',
            'nama_supir' => 'Yanto',
            'harga_sewa' => 810000,
        ]);
    }
}
