<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = DB::table('users')->get(); // ★
//
//        $titles = ['プライベート', '仕事', '旅行'];
//
//        foreach ($titles as $title) {
//            $param = [
//                'title' => $title,
//                'user_id' => $user->id, // ★
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ];
//            DB::table('folders')->insert($param);
//            DB::table('folders')->insert([
//                'title' => $title,
//                'user_id' => $user->id, // ★
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ]);
//        }
    }
}
