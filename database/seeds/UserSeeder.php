<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Admin',
            'status' => 'accepted',
        ]);
        User::create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Employee',
            'phone' => '0897654',
            'address' => 'Taung Gyi',
            'status' => 'accepted',
        ]);
        User::create([
            'name' => 'Ma Ma',
            'email' => 'mama@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Employee',
            'phone' => '0897654',
            'address' => 'Mandalay',
            'status' => 'accepted',
        ]);
        User::create([
            'name' => 'Kyaw Kyaw',
            'email' => 'kyawkyaw@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Employee',
            'phone' => '0897654',
            'address' => 'Yangon',
            'status' => 'accepted',
        ]);
        User::create([
            'name' => 'Green Hackers',
            'email' => 'ghi@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0897654',
            'address' => 'Yangon',
        ]);
        User::create([
            'name' => 'KMD',
            'email' => 'kmd@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0897654',
            'address' => 'Mandalay',
        ]);
        User::create([
            'name' => 'GEC Engineering & Construction Co.,Ltd',
            'email' => 'gec@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0420140115',
            'address' => 'Pyin Oo Lwin',
        ]);
        User::create([
            'name' => 'Robin Johnson Engineering (RJE Myanmar)',
            'email' => 'robin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '09876523019',
            'address' => 'Nay Pyi Taw',
        ]);
        User::create([
            'name' => 'Seafood City Hot Pot',
            'email' => 'cityhotpot@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '01878987734',
            'address' => 'Taungoo',
        ]);
        User::create([
            'name' => 'Innopower Co.,Ltd.',
            'email' => 'inpower@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '098246552',
            'address' => 'Bago',
        ]);
        User::create([
            'name' => 'OnDoctor Co., Ltd.',
            'email' => 'ondoctor@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0967803628',
            'address' => 'Mandalay',
        ]);
        User::create([
            'name' => 'Azura Hotels Group',
            'email' => 'azura@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0975467637',
            'address' => 'Chin State',
        ]);
        User::create([
            'name' => 'Myanmar Oasis Manufacturing',
            'email' => 'oasis@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0986245755',
            'address' => 'Magway',
        ]);
        User::create([
            'name' => 'AdvaMed Medical Innovation Co., Ltd.',
            'email' => 'innovation@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '019476327',
            'address' => 'Kachin State',
        ]);
        User::create([
            'name' => 'Techno-Hill Engineering Co.,Ltd',
            'email' => 'techno@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '019837674',
            'address' => 'Kayah State',
        ]);
        User::create([
            'name' => 'Dream Vision Co.,Ltd (mntv Channel)',
            'email' => 'dreamvision@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0976589784',
            'address' => 'Mon State',
        ]);
        User::create([
            'name' => 'Uniteam Global Business Services',
            'email' => 'global@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0947782989',
            'address' => 'Rakhine State',
        ]);
        User::create([
            'name' => 'KYAW THAR ENGINEERING & CONSTRUCTION GROUP CO.,LTD',
            'email' => 'kyawthar@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0976773665',
            'address' => 'Shan State',
        ]);
        User::create([
            'name' => 'Capital Diamond Star Group',
            'email' => 'capitaldiamond@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0967966978',
            'address' => 'Shan State',
        ]);
        User::create([
            'name' => 'Golden Tokyu Construction Co.,Ltd',
            'email' => 'goldentokyu@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0978965432',
            'address' => 'Taninthayi Division',
        ]);
        User::create([
            'name' => 'HEINEKEN Myanmar Limited',
            'email' => 'heineken@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '654345',
            'address' => 'Singapore',
        ]);
        User::create([
            'name' => 'Global Walkers Mayaysia, Inc',
            'email' => 'walkersmalaysia@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '5677890',
            'address' => 'Mayaysia',
        ]);
        User::create([
            'name' => 'Mottama Development Group Co., Ltd',
            'email' => 'mottama@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '32658790',
            'address' => 'Thailand',
        ]);
        User::create([
            'name' => 'Synapse Original',
            'email' => 'synapse@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '345677897',
            'address' => 'Australia',
        ]);
        User::create([
            'name' => 'MyWorld Careers Co., Ltd',
            'email' => 'myworldcareers@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '654323437',
            'address' =>'UK',
        ]);
        User::create([
            'name' => 'Jardine Schindler Ltd',
            'email' => 'jardine@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '39849757',
            'address' => 'USA',
        ]);
        User::create([
            'name' => 'Shinhan Microfinance',
            'email' => 'shinhan@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '37876778',
            'address' => 'International',
        ]);
        User::create([
            'name' => 'Pun Hlaing Hospital',
            'email' => 'panhlaing@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0987663893',
            'address' => 'Yangon',
        ]);
        User::create([
            'name' => 'Fairway Technology',
            'email' => 'fairway@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '01897678',
            'address' => 'Yangon',
        ]);
        User::create([
            'name' => 'Oway Travel and Tours',
            'email' => 'oway@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '09876380',
            'address' => 'Mandalay',
        ]);
        User::create([
            'name' => 'GETC & NURTURE English Training Center',
            'email' => 'GETC@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0927689895',
            'address' => 'Yangon',
        ]);
        User::create([
            'name' => 'KINGS International School',
            'email' => 'kings@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Company',
            'phone' => '0928689798',
            'address' => 'Bago',
        ]);


    }
}
