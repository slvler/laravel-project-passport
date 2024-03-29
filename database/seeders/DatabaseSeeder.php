<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123456789')
        ]);

        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            OrderSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();


    }
}
