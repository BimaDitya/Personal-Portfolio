<?php

namespace Database\Seeders;

use App\Models\Landing;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Landing::insert([
            'Name' => "Bima Aditya",
            'Desc' => "My name is Bima Aditya. I'm twenty-one years old. I am a student from Surabaya State University. I am interested in programming and graphic design, especially user interface design and front-end development. I'm also a hard worker, and I'm excited to learn."
        ]);
    }
}
