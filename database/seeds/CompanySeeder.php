<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Green Hackers',
            'address' => 'No.1, Thingan Kyun',
            'phonenumber' => '0976564467',
            'email' => 'ghi@gmail.com',
            'location_id' => 1,
        ]);
        Company::create([
            'name' => 'KMD',
            'address' => 'No.3, Hledan Lan',
            'phonenumber' => '0976564467',
            'email' => 'kmd@gmail.com',
            'location_id' => 1,
        ]);
        Company::create([
            'name' => 'KFC',
            'address' => 'No.4, Insein Road',
            'phonenumber' => '0976564467',
            'email' => 'kfc@gmail.com',
            'location_id' => 2,
        ]);
        Company::create([
            'name' => 'ABC',
            'address' => 'No.5, Bahan',
            'phonenumber' => '0976564467',
            'email' => 'ghi@gmail.com',
            'location_id' => 3,
        ]);
        Company::create([
            'name' => 'One Stop Mark',
            'address' => 'No.7, Karbar Aye Pagoda Road',
            'phonenumber' => '0976564467',
            'email' => 'osm@gmail.com',
            'location_id' => 4,
        ]);
    }
}
