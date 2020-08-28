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
            'requirement' => 'Must be BE-IT,Minimum 3 years of experience in PHP , Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 1,
            'type_id' => 1,
        ]);
        Job::create([
            'name' => 'Project Manager (Civil) (Construction)',
            'position' => 'Junior',
            'salary' => 500000,
            'requirement' => 'New Graduates can apply ,Graduates in Civil Engineer',
            'description' => ' Prepares feasibility study by analyzing engineering design; conducting environmental impact studies; assembling data.',
            'category_id' => 11,
            'company_id' => 6,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Laravel Web Developer',
            'position' => 'Senior',
            'salary' => 1000000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 2,
            'type_id' => 2,
        ]);
        Job::create([
            'name' => 'Java Web Developer',
            'position' => 'Junior',
            'salary' => 400000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 1,
            'type_id' => 4,
        ]);
        Job::create([
            'name' => 'Python Developer',
            'position' => 'Junior',
            'salary' => 400000,
            'requirement' => 'Must be BE-IT, Must speak English fluently',
            'description' => 'This job is very good for everyone',
            'category_id' => 1,
            'company_id' => 2,
            'type_id' => 3,
        ]);
        Job::create([
            'name' => 'Medical Marketing Officer',
            'position' => 'senior',
            'salary' => 600000,
            'requirement' => 'Good selling and communication skill, Good product and market knowledge ,Strong focused on customer relationship,Good team player',
            'description' => 'Responsible for visiting Doctors as per assigned plan,Responsible for achievement of assigned area sales target',
            'category_id' => 4,
            'company_id' => 7,
            'type_id' => 2,
        ]);
    }
}
