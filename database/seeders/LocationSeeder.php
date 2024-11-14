<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Database\Factories\CityFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::factory()->count(300)->create(); // Membuat 300 kota
        Country::factory()->count(120)->create(); // Membuat 120 negara
    }
}
