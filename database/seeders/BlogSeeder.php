<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $attemp = 12;
        for ($i = 0; $i < $attemp; $i++) {
            $blog = new Blog();
            $blog->blog_img = "image-1.jpg";
            $blog->blog_title = $faker->words(10, true);
            $blog->blog_content = $faker->words(100, true);
            $blog->save();
        }
    }
}
