<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Desert'
            ],
            [
                'name' => 'Chicken'
            ],
            [
                'name' => 'Salad'
            ],
            [
                'name' => 'Pizza'
            ],
            [
                'name' => 'Fish'
            ]
        ];

        DB::table('categories')->insert($category);

    }
}
