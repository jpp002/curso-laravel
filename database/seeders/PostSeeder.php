<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i=0; $i < 30; $i++) { 
            $c = Category::inRandomOrder()->first();

            $title = Str::random(20);

            Post::create([
                    'title' => $title, 
                    'slug' => Str::slug($title),
                    'content' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellendus laborum quisquam, similique quos possimus reprehenderit totam nulla harum blanditiis sint molestias animi ipsam neque corporis temporibus ratione rerum cum?</p>",
                    'category_id' => $c->id,
                    'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellendus laborum quisquam, similique quos possimus reprehenderit totam nulla harum blanditiis sint molestias animi ipsam neque corporis temporibus ratione rerum cum?",
                    'posted' => 'yes'
                    
                ]
            );
        }
    }
}
