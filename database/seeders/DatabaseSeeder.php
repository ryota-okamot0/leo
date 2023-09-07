<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * DBシーダ―基底クラス
 * DatabaseSeeder
 *
 * DBシーダ―登録処理用の基底クラス
 */
class DatabaseSeeder extends Seeder
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
        $this->call([TweetSeeder::class]);
    }
}
