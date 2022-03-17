<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'admin perpustakaan',
            'email' => 'admin1@perpus.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now()
        ]);
    }
}
