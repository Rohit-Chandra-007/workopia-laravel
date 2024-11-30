<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('job_listings')->truncate();
        DB::table('users')->truncate();

        $this->call([
            RandomUserSeeder::class,
            RandomJobSeeder::class,
        ]);


    }
}
