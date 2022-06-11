<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
        DB::table('users')->insert([
            'fullname' => 'Adhitya Nugroho',
            'username' => 'Kurokuro',
            'email' => 'kurokuro@pegadaian.com',
            'password' => bcrypt('gadai123'),
            'deskripsi' => 'super_admin',
            'role' => 'admin',
            'status' => 'active',
            
    ]);
        DB::table('users')->insert([
            'fullname' => 'Dhemas',
            'username' => 'Dhemas',
            'email' => 'dhemas@pegadaian.com',
            'password' => bcrypt('12345678'),
            'deskripsi' => 'ok',
            'role' => 'admin',
            'status' => 'active',
    ]);
    DB::table('kategori_thread')->insert([
        'jenis_kategori' => 'HOT THREAD',
        'status' => 'tampilkan',
    ]);
    DB::table('kategori_thread')->insert([
        'jenis_kategori' => 'MASAKAN INDONESIA',
        'status' => 'tampilkan',
    ]);
    DB::table('kategori_thread')->insert([
        'jenis_kategori' => 'MASAKAN WESTERN',
        'status' => 'tampilkan',
    ]);
    DB::table('kategori_thread')->insert([
        'jenis_kategori' => 'MASAKAN ASIA',
        'status' => 'tampilkan',
    ]);
    DB::table('kategori_thread')->insert([
        'jenis_kategori' => 'MASAKAN ASIA',
        'status' => 'tampilkan',
    ]);
    DB::table('iklan')->insert([
        'judul_iklan' => 'Test Iklan',
        'deskripsi' => 'jualan iklan',
        'created_by' => '2',
    ]);
    DB::table('thread')->insert([
        'id_kategori' => '3',
        'judul' => 'Cangcimen',
        'isi_thread' => 'lorem ipsum test test test',
        'id_user' => '1',
        'status' => 'tampilkan',
    ]);
    }
}
