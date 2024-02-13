<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelaz;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\student::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        kelaz::create([
            "nama" => "10 PPLG 1"
        ]);
        kelaz::create([
            "nama" => "10 PPLG 2"
        ]);
        kelaz::create([
            "nama" => "11 PPLG 1"
        ]);
        kelaz::create([
            "nama" => "11 PPLG 2"
        ]);
        kelaz::create([
            "nama" => "12 PPLG 1"
        ]);
        kelaz::create([
            "nama" => "12 PPLG 2"
        ]);
    }
}
