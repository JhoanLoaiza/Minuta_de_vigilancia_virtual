<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        \App\Models\User::factory()->create([
            'name' => 'administrador',
            'email' => 'admini@email.co',
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Personal::factory(20)->create();
        \App\Models\Institucional::factory(20)->create();
        \App\Models\Funcionario::factory(30)->create();
    }
}
