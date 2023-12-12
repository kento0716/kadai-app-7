<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller,
    Session;
use App\Models\User;

class FollowController extends Controller
{
    /**
     * フォロー/フォロワーリスト画面遷移
     */
    public function index($id)
    {

        // 指定したIDのユーザー情報を取得する
        $user = User::find($id);

        // ユーザーが存在するか判定
        if ($user == null) {
            return dd('存在しないユーザーです');
        }

        // フォローとフォロワーの取得
        $followUsers = $user->followUsers();
        $followerUsers = $user->followerUsers();

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');

        // 画面表示
        return view('user.follow', compact('user', 'followUsers', 'followerUsers'));
    }

    /**
     * フォロー/フォロワー解除処理
     */
    public function update(Request $request, $id)
    {
        // idからユーザーを取得
        $user = User::find($id);

        // ユーザーが存在するか判定
        if ($user == null) {
            return dd('存在しないユーザーです');
        }
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            return redirect('/');
        }

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');

        if ($request->isFollow) {
            // フォロー処理
            $loginUser->follow($id);
        } else {
            // フォロー解除処理
            $loginUser->unfollow($id);
        }

        // 画面表示
        return redirect('/user/' . $user->id);
    }
}
