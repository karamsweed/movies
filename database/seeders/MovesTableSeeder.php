<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moves = [
            ['name' => 'movie 1', 'director' => 'DIR 1','cost' => ' 1', 'year' => '1999 '],
            ['name' => 'movie 2', 'director' => 'DIR 2','cost' => ' 2', 'year' => '2022 '],
            ['name' => 'movie 3', 'director' => 'DIR 3','cost' => ' 3', 'year' => '2014 '],
            ['name' => 'movie 4', 'director' => 'DIR 4','cost' => ' 4', 'year' => '2018 '],
            ['name' => 'movie 5', 'director' => 'DIR 5','cost' => ' 5', 'year' => '2012 '],

        ];

        DB::table('movest')->insert($moves);
    }
}
