<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            'email' => 'admin@admin.com',
            'password' => '123456',
        ]);
    }
}
