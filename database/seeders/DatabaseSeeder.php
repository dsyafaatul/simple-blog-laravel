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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => "D. Syafa'atul Anbiya",
        //     'email' => 'dikisyafaatul@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => "D. Jama'atul Anbiya",
        //     'email' => 'djamaatul.anbiya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Post Pertama',
        //     'slug' => 'post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut? Excepturi nesciunt dicta perferendis ipsam neque, dolor unde laudantium repellendus illum nam error pariatur voluptatibus, architecto veniam harum consequuntur incidunt! Eum neque dolor laudantium quasi magnam? Nihil iusto nostrum beatae deserunt id, eius at autem aperiam ut laboriosam culpa minus atque provident, debitis veniam delectus ipsam. Illum laborum magni ipsam in blanditiis sunt molestiae. Ad, distinctio consectetur repellat nulla ullam perspiciatis exercitationem, fuga quo possimus, cumque illo itaque accusamus modi. Ab blanditiis autem similique odio?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Post Kedua',
        //     'slug' => 'post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut? Excepturi nesciunt dicta perferendis ipsam neque, dolor unde laudantium repellendus illum nam error pariatur voluptatibus, architecto veniam harum consequuntur incidunt! Eum neque dolor laudantium quasi magnam? Nihil iusto nostrum beatae deserunt id, eius at autem aperiam ut laboriosam culpa minus atque provident, debitis veniam delectus ipsam. Illum laborum magni ipsam in blanditiis sunt molestiae. Ad, distinctio consectetur repellat nulla ullam perspiciatis exercitationem, fuga quo possimus, cumque illo itaque accusamus modi. Ab blanditiis autem similique odio?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Post Ketiga',
        //     'slug' => 'post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut? Excepturi nesciunt dicta perferendis ipsam neque, dolor unde laudantium repellendus illum nam error pariatur voluptatibus, architecto veniam harum consequuntur incidunt! Eum neque dolor laudantium quasi magnam? Nihil iusto nostrum beatae deserunt id, eius at autem aperiam ut laboriosam culpa minus atque provident, debitis veniam delectus ipsam. Illum laborum magni ipsam in blanditiis sunt molestiae. Ad, distinctio consectetur repellat nulla ullam perspiciatis exercitationem, fuga quo possimus, cumque illo itaque accusamus modi. Ab blanditiis autem similique odio?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Post Keempat',
        //     'slug' => 'post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eum, libero repellendus, qui, dicta vitae laboriosam quos hic illo explicabo rem iste similique soluta aut? Excepturi nesciunt dicta perferendis ipsam neque, dolor unde laudantium repellendus illum nam error pariatur voluptatibus, architecto veniam harum consequuntur incidunt! Eum neque dolor laudantium quasi magnam? Nihil iusto nostrum beatae deserunt id, eius at autem aperiam ut laboriosam culpa minus atque provident, debitis veniam delectus ipsam. Illum laborum magni ipsam in blanditiis sunt molestiae. Ad, distinctio consectetur repellat nulla ullam perspiciatis exercitationem, fuga quo possimus, cumque illo itaque accusamus modi. Ab blanditiis autem similique odio?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
