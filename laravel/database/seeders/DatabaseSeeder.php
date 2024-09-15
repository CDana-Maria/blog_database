<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Article::factory(10)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\Comment::factory(10)->create();
        \App\Models\ArticleTag::factory(10)->create();

        $this->call(SponsorSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(OrganizatorSeeder::class);
        $this->call(ServiceOrganizatorSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
