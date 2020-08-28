<?php

use App\Type;
use Illuminate\Database\Seeder;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Part Time',
            'description' => 'Part time is the working time to work for part time'
        ]);
        Type::create([
            'name' => 'Full Time',
            'description' => 'Full time is the working time to work for full time'
        ]);
        Type::create([
            'name' => 'Internship',
            'description' => 'Internship is the working time to work or study for all day'
        ]);
        Type::create([
            'name' => 'Freelancer',
            'description' => 'Freelancers are  self-employed and not necessarily committed to a particular employer long-term.'
        ]);
    }
}
