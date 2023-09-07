<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * tweetsファクトリー―クラス
 * TweetFactory
 *
 * tweetsテーブルデータ登録用のファクトリークラス
 */
class TweetFactory extends Factory
{
    /**
     * データ生成
     * definition
     *
     * シーダ―実行用のデータを生成する
     *
     * @param なし
     * @return array
     *    tweetsテーブル登録用配列
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->realText(100)
        ];
    }
}
