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
        $user = DB::table('users')->first();

        DB::table('reviews')->insert([
            'name' => '小林　翔',
            'sex' => 1,
            'age' => '2',
            'mail' => 'kobayashisyo@crunchtimer.jp',
            'mail-sent' => 2,
            'review' => '5',
            'opinion' => 'おいしかったです',
            'user_id' => $user->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('reviews')->insert([
            'name' => '斉藤　たかし',
            'sex' => 1,
            'age' => '5',
            'mail' => 'hogehoge@gmail.jp',
            'mail-sent' => 1,
            'review' => '2',
            'opinion' => 'けしからん',
            'user_id' => $user->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('reviews')->insert([
            'name' => 'テスト　花子',
            'sex' => 2,
            'age' => '1',
            'mail' => 'kobayashisyo@crunchtimer.jp',
            'mail-sent' => 1,
            'review' => '5',
            'opinion' => 'インスタ映えしました',
            'user_id' => $user->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
