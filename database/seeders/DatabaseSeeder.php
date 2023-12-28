<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'admin',
            'username' => 'Admin1',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678',
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]);

        User::factory(10)->create();

        Post::factory(10)->create();

        Category::create([
            'name' => 'Art & Design',
            'slug' => 'art-dan-design'
        ]);

        Category::create([
            'name' => 'Cartoon',
            'slug' => 'cartoon'
        ]);

        Category::create([
            'name' => 'Film',
            'slug' => 'film'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);
        Category::create([
            'name' => 'Music',
            'slug' => 'music'
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
    }
}
