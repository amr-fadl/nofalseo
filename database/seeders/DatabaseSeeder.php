<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Post::factory(10)->create();
        // \App\Models\User::factory(1)->create();

        User::factory(1)
        ->create()
        ->each(function($user){
            Post::factory(1)
            ->create([
                'user_id' => $user->id
            ])->each(function ($post) use ($user) {
                Comment::factory(1)
                ->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id
                ]);
            });
        });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
