<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '寿司ざんまい',
            'email' => 'susizanmai@gmail.com',
            'password' => bcrypt('susizanmai'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ぐりぐり屋',
            'email' => 'guriguriya@gmail.com',
            'password' => bcrypt('guriguriya'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ピザハット',
            'email' => 'pizahatto@gmail.com',
            'password' => bcrypt('pizahatto'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
