<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'name' => 'Jonathan Smith'
            ],
            [
                'name' => 'Smith Row'
            ],
            [
                'name' => 'Row Jonathan'
            ]
        ];

        DB::table('authors')->insert($authors);

    }
}
