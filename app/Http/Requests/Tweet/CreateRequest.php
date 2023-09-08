<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ツイート機能リクエストクラス
 * CreateRequest
 *
 * ツイート機能のリクエストに関する処理を行うクラス
 */
class CreateRequest extends FormRequest
{
    /**
     * リクエスト認証判定
     * authorize
     *
     * ユーザーからリクエストを認証するかを判定する
     *
     * @param なし
     * @return bool
     *    許可：true
     *    禁止：false
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * リクエスト値検証用バリデーションルール
     * rules
     *
     * リクエスト値検証用のバリデーションルール
     *
     * @param なし
     * @return array
     *    バリデーションルール配列
     */
    public function rules(): array
    {
        return [
            'tweet' => 'required|max:140'
        ];
    }

    /**
     * ツイートリクエスト取得
     * tweet
     *
     * リクエストのツイートを返す
     *
     * @param なし
     * @return string
     *    ツイートリクエストパラメータ
     */
    public function tweet(): string
    {
        return $this->input('tweet');
    }
}
