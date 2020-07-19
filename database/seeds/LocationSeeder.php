<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' => 'Yangon',
        ]);
        Location::create([
            'name' => 'Mandalay',
        ]);
        Location::create([
            'name' => 'Pyi Oo Lwin',
        ]);
        Location::create([
            'name' => 'Bago',
        ]);
        Location::create([
            'name' => 'Taung Gyi',
        ]);
    }
}
