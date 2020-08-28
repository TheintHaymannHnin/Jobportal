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
            'name' => 'Bago Division',
        ]);
        Location::create([
            'name' => 'Taungoo',
        ]);
        Location::create([
            'name' => 'Nay Pyi taw',
        ]);
        Location::create([
            'name' => 'Ayeyawady  Division',
        ]);
        Location::create([
            'name' => 'Chin State',
        ]);
        Location::create([
            'name' => 'Kachin State',
        ]);
        Location::create([
            'name' => 'Kayah State',
        ]);
        Location::create([
            'name' => 'Magway State',
        ]);
        Location::create([
            'name' => 'Mon State',
        ]);
        Location::create([
            'name' => 'Rakhine State',
        ]);
        Location::create([
            'name' => 'Sagaing Division',
        ]);
        Location::create([
            'name' => 'Shan State',
        ]);
        Location::create([
            'name' => 'Taninthayi Division',
        ]);
        Location::create([
            'name' => 'Singapore',
        ]);
        Location::create([
            'name' => 'Malaysia',
        ]);
        Location::create([
            'name' => 'Thailand',
        ]);
        Location::create([
            'name' => 'Australia',
        ]);
        Location::create([
            'name' => 'UK',
        ]);
        Location::create([
            'name' => 'USA',
        ]);
        Location::create([
            'name' => 'International',
        ]);
    }
}
