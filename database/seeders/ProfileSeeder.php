<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::insert([
            'Fullname' => "Bima Aditya Anugrah Putra",
            'Role' => "Students College - State University Surabaya",
            'Gender' => "Male",
            'Address' => "Kedungadem - Bojonegoro",
            'Birthday' => "30 Oktober 1999",
            'Instagram'  => "https://www.instagram.com/bimaditya30/",
            'LinkedIn' => "https://www.linkedin.com/in/bimaditya30/",
        ]);
        
    }
}
