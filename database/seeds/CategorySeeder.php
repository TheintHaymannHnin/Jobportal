<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'IT',
        ]);
        Category::create([
            'name' => 'Marketing',
        ]);
        Category::create([
            'name' => 'Education',
        ]);
        Category::create([
            'name' => 'Medicine',
        ]);
        Category::create([
            'name' => 'Hotel,Tourism',
        ]);
        Category::create([
            'name' => 'Manufacturing',
        ]);
        Category::create([
            'name' => 'Science,Technology',
        ]);
        Category::create([
            'name' => 'HR',
        ]);
        Category::create([
            'name' => 'Entertainment',
        ]);
        Category::create([
            'name' => 'Architecture ,Design',
        ]);
        Category::create([
            'name' => 'Civil Engineering',
        ]);
        Category::create([
            'name' => 'Electrical Engineering',
        ]);
        Category::create([
            'name' => 'Electronic Engineering',
        ]);
        Category::create([
            'name' => 'Mechtronic Engineering',
        ]);
        Category::create([
            'name' => 'Mechnical Engineering',
        ]);
        Category::create([
            'name' => 'Chemical Engineering',
        ]);
        Category::create([
            'name' => 'Arts',
        ]);
        Category::create([
            'name' => 'Training',
        ]);
        Category::create([
            'name' => 'Health,Beauty,Fitness',
        ]);
        Category::create([
            'name' => 'Sports',
        ]);
        Category::create([
            'name' => 'Business',
        ]);
        Category::create([
            'name' => 'Finance, Accounting',
        ]);
        Category::create([
            'name' => 'Forestry',
        ]);
        Category::create([
            'name' => 'Management',
        ]);
        Category::create([
            'name' => 'Petroleum Engineering',
        ]);
        Category::create([
            'name' => 'Transportation',
        ]);
        Category::create([
            'name' => 'Others',
        ]);
    }
}
