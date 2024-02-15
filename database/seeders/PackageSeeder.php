<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::insert([
            'title' => 'Trip A',
            'slug' => 'trip-a',
            'price' => 100,
            'languages' => 'English',
            'description' => 'Description for Trip A',
            'people' => 10,
            'time' => '2 days',
            'type' => 'Open Trip',
        ]);

        // Seeder 2
        Package::insert([
            'title' => 'Trip B',
            'slug' => 'trip-b',
            'price' => 150,
            'languages' => 'Spanish',
            'description' => 'Description for Trip B',
            'people' => 15,
            'time' => '3 days',
            'type' => 'Family Trip',
        ]);
    }
}
