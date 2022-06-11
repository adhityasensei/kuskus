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
            'fullname' => 'Dhemas Angger',
            'username' => 'Dhemas',
            'email' => 'dhemas@pegadaian.com',
            'password' => bcrypt('12345678'),
            'deskripsi' => 'ok',
            'role' => 'admin',
            'status' => 'active',
    ]);
         DB::table('users')->insert([
        'fullname' => 'Budi Priyo',
        'username' => 'BUdi',
        'email' => 'budi@pegadaian.com',
        'password' => bcrypt('12345678'),
        'deskripsi' => 'ok',
        'role' => 'user',
        'status' => 'active',
    
    ]);
    DB::table('users')->insert([
        'fullname' => 'Eka Naufal',
        'username' => 'Naufal',
        'email' => 'naufal@pegadaian.com',
        'password' => bcrypt('12345678'),
        'deskripsi' => 'ok',
        'role' => 'user',
        'status' => 'active',
    ]);
    DB::table('users')->insert([
        'fullname' => 'Yulia Permatasari',
        'username' => 'Yulia',
        'email' => 'Yulia@pegadaian.com',
        'password' => bcrypt('12345678'),
        'deskripsi' => 'ok',
        'role' => 'user',
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
        'judul_iklan' => 'Sarapan Nusantara',
        'deskripsi' => 'Masakan Khas Indonesia',
        'created_by' => '2',
    ]);
    DB::table('thread')->insert([
        'id_kategori' => '3',
        'judul' => 'Bubur Kanji Rumbi',
        'isi_thread' => 'Bosen dengan Bubur Ayam, bisa di coba dengan Bubur Kanji Rumbi yang isiannya berupa bubur nasi santan yang ditambah kaldu daging dan kaya rempah-rempah. Kadang juga ditambah udang dan toping sayuran tergantung selera. Paling enak kalau ditaburi bawang goreng biar makin gurih.',
        'id_user' => '1',
        'status' => 'tampilkan',
    ]);
    DB::table('thread')->insert([
        'id_kategori' => '3',
        'judul' => 'Lontong Pical',
        'isi_thread' => 'Menu sarapan sejuta umat di kota Rendang ini. Namanya lontong pical, ya, sesuai namanya, berisi lontong (kadang ketupat) digado dengan mie kuning atau bihun, ditambah sayuran seperti rebusan daun singkong, kangkung, taoge, lobak atau bunga kol, dan ditaburi toping tahu goreng serta kerupuk merah.',
        'id_user' => '1',
        'status' => 'tampilkan',
    ]);
    DB::table('thread')->insert([
        'id_kategori' => '3',
        'judul' => 'Kupat Tahu',
        'isi_thread' => 'Makanan kaya protein ini dan nikmat pula apabila diolah dengan cara apa saja, termasuk jika dimasak menjadi kupat tahu khas Jawa Barat ini. Cara bikinnya pun gampang. Gansis tinggal tambahin tahu goreng dengan kupat atau ketupat kemudian disiram bumbu kacang dan tambahkan kerupuk.',
        'id_user' => '2',
        'status' => 'tampilkan',
    ]);
    DB::table('iklan')->insert([
        'judul_iklan' => 'Mengenal Rasa Khas Nusantara',
        'deskripsi' => 'Rujak Cingur, Rawon, Rujak Sayur Asin khas Surabaya',
        'created_by' => '1',
    ]);
    DB::table('thread')->insert([
        'id_kategori' => '3',
        'judul' => 'Makanas Khas Surabaya',
        'isi_thread' => 'Kuliner khas dari kota Pahlawan tercinta yaitu Surabaya. Rujak Cingur dan Rawon memang sangatlah terkenal, bahkan setiap kali ke Surabaya! Tak afdol rasanya, jika tidak mampir berkunjung ke warung makan rawon maupun rujak cingur. Selain itu, Surabaya juga dikenal memiliki oleh-oleh jajanan khas yaitu Lapis Surabaya.',
        'id_user' => '1',
        'status' => 'tampilkan',
    ]);DB::table('iklan')->insert([
        'judul_iklan' => 'Gorenga:Cemilan Lezat',
        'deskripsi' => 'Cemilan yang  Nggak Ada Matinya di Seluruh Dunia,',
        'created_by' => '2',
    ]);
    DB::table('thread')->insert([
        'id_kategori' => '5',
        'judul' => 'Gorengan Selalu Jadi Favorit',
        'isi_thread' => 'Tentunya sebagian besar warga Indonesia telah akrab dengan yang namanya gorengan, makanan ringan gurih dan renyah ini memang cocok dijadikan teman ngeteh atau ngopi.',
        'id_user' => '1',
        'status' => 'tampilkan',
    ]);
    }
}
