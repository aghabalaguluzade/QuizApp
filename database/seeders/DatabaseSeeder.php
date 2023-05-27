<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Quiz;
use Database\Factories\QuizFactory;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Question\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seeder
        $this->call([
            UserSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
        ]);
    }
}
