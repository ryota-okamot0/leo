<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

/**
 * ツイート機能コントローラクラス
 * IndexController
 *
 * ツイート機能初期表示に関する処理を行うクラス
 */
class IndexController extends Controller
{
    /**
     * ツイート機能初期表示
     * __invoke
     *
     * ツイート機能の初期表示を処理するシングルアクションコントローラクラス
     *
     * @param Request $request
     *    リクエストパラメータ
     * @return View
     *    View
     */
    public function __invoke(Request $request)
    {
        return view('tweet.index')
            ->with('tweets', Tweet::all());
    }
}
