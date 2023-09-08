<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;
use App\Models\Tweet;

/**
 * ツイート登録機能コントローラクラス
 * CreateController
 *
 * ツイート登録機能に関する処理を行うクラス
 */
class CreateController extends Controller
{
    /**
     * ツイート登録機能実行処理
     * __invoke
     *
     * ツイート登録機能処理を実行するシングルアクションコントローラクラス
     *
     * @param CreateRequest $request
     *    リクエストパラメータ
*    * @return Illuminate\Http\RedirectResponse
     *    RedirectResponse
     */
    public function __invoke(CreateRequest $request)
    {
        $tweet = new Tweet;
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('tweet.index');
    }
}
