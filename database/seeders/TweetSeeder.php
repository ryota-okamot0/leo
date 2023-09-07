<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * ツイートシーダ―クラス
 * TweetSeeder
 *
 * tweetsテーブル初期データ登録用のシーダ―クラス
 */
class TweetSeeder extends Seeder
{
    /**
     * シーダ―実行
     * run
     *
     * シーダ―実行処理
     *
     * @param なし
     * @return なし
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
            'content'    => Str::random(100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
