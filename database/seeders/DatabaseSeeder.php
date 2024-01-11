<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'Anjay',
        //     'email' => 'anjay@email.com',
        //     'password' => bcrypt('password'),
        // ]);

        // User::create([
        //     'name' => 'Asep',
        //     'email' => 'asep@email.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web',
            'slug' => 'web'
        ]);

        Category::create([
            'name' => 'Data',
            'slug' => 'data'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Mantap maseh',
        //     'user_id' => '1',
        //     'category_id' => '1',
        //     'slug' => 'mantap-maseh',
        //     'likes' => '100',
        //     'body' => 'Mantap',
        // ]);

        // Post::create([
        //     'title' => 'Mantap mas',
        //     'user_id' => '2',
        //     'category_id' => '2',
        //     'slug' => 'mantap-mas',
        //     'likes' => '10',
        //     'body' => 'Mantap sik',
        // ]);

        // Post::create([
        //     'title' => 'Mantap masbro',
        //     'user_id' => '2',
        //     'category_id' => '2',
        //     'slug' => 'mantap-masbro',
        //     'likes' => '11',
        //     'body' => 'Mantap coy',
        // ]);
    }
}
