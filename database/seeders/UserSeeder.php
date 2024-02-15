<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        $data = [];

        for ($i = 1; $i <= 20; $i++) {
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('Bismillah09'),
                'address' => $faker->address
            ];
        }

        User::insert($data);
    }
}
