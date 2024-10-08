<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Branch;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\BranchFactory;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            BranchSeeder::class,
            AdsSeeder::class,
            UserSeeder::class,
            StatusSeeder::class
        ]);
        User::factory()->create([
            'username' => 'Jamshid',
            'email' => 'jamshidbek@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
