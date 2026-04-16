<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User1',
            'email' => 'test1@example.com',
            'osztaly_nev' => '9A',
        ]);
        User::factory()->create([
            'name' => 'Test User2',
            'email' => 'test2@example.com',
            'osztaly_nev' => '9B',
        ]);
        User::factory()->create([
            'name' => 'Test Use3',
            'email' => 'test3@example.com',
            'osztaly_nev' => '9C',
        ]);

        $this->call([TevekenysegSeeder::class,]);
    }
}
