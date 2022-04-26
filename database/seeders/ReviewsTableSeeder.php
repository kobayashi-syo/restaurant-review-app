<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'name' => '小林　翔',
            'sex' => 1,
            'age' => '2',
            'mail' => 'kobayashisyo@crunchtimer.jp',
            'mail-sent' => 2,
            'review' => '5',
            'opinion' => 'おいしかったです',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
