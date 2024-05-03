<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {

        $faker = Faker::create('bg_BG');
        foreach (range(1,100) as $index) {
            \DB::table('music')->insert([
                'image'=>$faker->null,
                'user_id' => rand(1, 5),
                'song' => $faker->sentence,
                'singer' => $faker->name,
                'genre' => $faker->sentence,
                'link'=>$faker->null,
            ]);
        }

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
