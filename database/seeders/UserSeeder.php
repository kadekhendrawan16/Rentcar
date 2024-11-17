<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_user')->insert([
            'nama_user' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'telp' => '123456789',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        DB::table('tb_user')->insert([
            'nama_user' => 'Hendrawan',
            'username' => 'Hendrawan',
            'password' => Hash::make('1234567'),
            'telp' => '1234567891',
            'level' => 'user',
            'email' => 'Hendrawan@gmail.com',
        ]);

        DB::table('tb_user')->insert([
            'nama_user' => 'Nanta',
            'username' => 'Nanta',
            'password' => Hash::make('Nanta12345'),
            'telp' => '1234567892',
            'level' => 'user',
            'email' => 'Nanta@gmail.com',
        ]);

        DB::table('tb_user')->insert([
            'nama_user' => 'Kadek',
            'username' => 'kadek',
            'password' => Hash::make('Kadek2003'),
            'telp' => '1234567893',
            'level' => 'user',
            'email' => 'kadek@gmail.com',
        ]);

        DB::table('tb_user')->insert([
            'nama_user' => 'Yunus',
            'username' => 'Yunus',
            'password' => Hash::make('mangeak'),
            'telp' => '1234567894',
            'level' => 'user',
            'email' => 'Yunus@gmail.com',
        ]);
    }
}
