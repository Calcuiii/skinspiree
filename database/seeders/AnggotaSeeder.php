<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota')->insert([
            [
                'name' => 'admin',
                'password' => bcrypt('123456'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'karina',
                'password' => bcrypt('123456'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'billa',
                'password' => bcrypt('123456'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
