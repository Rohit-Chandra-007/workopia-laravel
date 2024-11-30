<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class RandomJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Calling factory to create data inside a seeder.
        $jobs = Job::factory(10)->create();
        echo "Jobs created successfully\n";
    }
}
