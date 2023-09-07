<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * ツイートシーダ―クラス
 * TweetSeeder
 *
 * tweetsテーブル初期データ登録用のシーダ―クラス
 */
class TweetsSeeder extends Seeder
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
        Tweet::factory()->count(10)->create();
    }
}
