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
            'name' => 'HR',
        ]);
    }
}
