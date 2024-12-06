<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // load job listings from file
        $jobListings = include database_path(('seeders/data/job_listings.php'));

        // get user ids
        $userIds = User::pluck('id')->toArray();
       
        foreach ($jobListings as &$jobListing) {
            // assign user_id listings
            $jobListing['user_id'] = $userIds[array_rand($userIds)];
            $jobListing['created_at'] = now();
            $jobListing['updated_at'] = now();
        }

        // insert job listings
        DB::table('job_listings')->insert($jobListings);
        echo "Job listings created successfully\n";
    }
}
