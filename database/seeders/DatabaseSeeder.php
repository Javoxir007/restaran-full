<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Chef;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserTableSeeder::class,
            CategorySeeder::class,
            OrderSeeder::class,
            ProductSeeder::class,
            AuthorSeeder::class
        ]);

        Product::factory(100)->create();
        Blog::factory(25)->create();
        Chef::factory(20)->create();

    }
}
