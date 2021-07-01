<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RubricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rubrics')->insert([
            [
                'title' => 'Общество',
                'slug'  => 'society'
            ],
            [
                'title' => 'Экономика',
                'slug'  => 'economy'
            ],
            [
                'title' => 'Hi-Tech',
                'slug'  => 'hi-tech'
            ],
            [
                'title' => 'Авто',
                'slug'  => 'auto'
            ],
            [
                'title' => 'Культура',
                'slug'  => 'culture'
            ],
            [
                'title' => 'Здоровье',
                'slug'  => 'health'
            ],
            [
                'title' => 'Коронавирус',
                'slug'  => 'covid-19'
            ],
            [
                'title' => 'Знаменитости',
                'slug'  => 'celebrities'
            ],
        ]);
    }
}
