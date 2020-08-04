<?php

use App\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'name' => 'PHP Web Developer',
            'position' => 'Junior',
            'salary' => 300000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 2,
            'type_id' => 1,
        ]);
        Job::create([
            'name' => 'Laravel Web Developer',
            'position' => 'Senior',
            'salary' => 1000000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 2,
            'company_id' => 2,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Java Web Developer',
            'position' => 'Junior',
            'salary' => 400000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 3,
            'company_id' => 2,
            'type_id' => 3,
        ]);
        Job::create([
            'name' => 'Python Developer',
            'position' => 'Junior',
            'salary' => 400000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 4,
            'company_id' => 2,
            'type_id' => 3,
        ]);
    }
}
