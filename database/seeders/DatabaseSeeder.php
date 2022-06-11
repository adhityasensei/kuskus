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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Dhemas',
            'email' => 'dhemas@pegadaian.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'deskripsi' => 'ok',
            'foto' => 'https://ichef.bbci.co.uk/news/640/cpsprodpb/02F9/production/_104516700_3_spongebob_squarepants__hr.jpg',
    ]);
        DB::table('users')->insert([
        'name' => 'Aditya',
        'email' => 'aditya@pegadaian.com',
        'password' => bcrypt('12345678'),
        'role' => 'admin',
        'deskripsi' => 'ok',
        'foto' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/09/05/173528969.jpg',
    ]);

    // Db::table('comment')

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    // }
    }
}
