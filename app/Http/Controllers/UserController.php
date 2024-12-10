<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller,Session;
use App\Models\User;

class UserController extends Controller
{
    /**
     * ユーザー画面遷移
     */
    public function show($id)
    {
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            // ログインしていなければログインページへ
            return redirect('/login');
        }

        // 指定したIDのユーザー情報を取得する
        $user = User::find($id);

        // ユーザーが存在するか判定
        if (!$user) {
            return abort(404, '存在しないユーザーです'); // 修正: より適切なエラーメッセージを使用
        }

        // ユーザーの投稿を取得
        $posts = $user->posts();

        // フォロー/フォロワー数の取得
        $followCount = count($user->followusers());
        $followerCount = count($user->followerurusers());

        // ログイン中のユーザーの情報を取得する
        $loginUser = Auth::user(); // 修正: Auth::user() で現在のログインユーザーを取得
        $isOwnPage = $loginUser->id == $user->id;

        // フォロー済みかどうか判定
        $isFollowed = false;
        if (!$isOwnPage) {
            $isFollowed = $loginUser->isFollowed($user->id);
        }

        // 画面表示
        return view('user.index', compact('user', 'posts', 'followCount', 'followerCount', 'isOwnPage', 'isFollowed'));
    }

    /**
     * プロフィール編集画面遷移
     */
    public function edit($id)
    {
        $user = User::find($id);

        // ユーザーが存在するか判定
        if (!$user==null) {
            return dd(404, '存在しないユーザーです'); 
        }

        // セッションログイン情報があるかどうか確認
        if (!sessin::exists('user')) {
            return redirect('/');
        }

        // ログイン中のユーザーの情報を取得する
        $loginUser = Auth::user();

        // 自分自身のユーザーページか判定
        if ($loginUser->id != $user->id) {
            return redirect('/');
        }

        // 画面表示
        return view('user.edit', compact('user'));
    }

    /**
     * プロフィール編集処理
     */
    public function update(Request $request, $id)
    {
        // idからユーザーを取得
        $user = User::find($id);

        // 投稿が存在するか判定
        if (!$user==null) {
            return dd(404, '存在しないユーザーです');
        }

        

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');

        // 自分自身の投稿ページか判定
        if($loginUser->id!=$user->id){
            return redirect('/');
        } 
        // データ登録
        $user->name = $request->username;
        $user->biography = $request->biography;
        $user->save();

        // 画面表示
        return redirect('/user' . $user->id);
    }

    /**
     * 新規登録画面遷移
     */
    public function create()
    {
        $errorMessage = null;
        return view('user.signup', compact('errorMessage'));
    }
    /**
     */
    public function store(Request $request)
    {
        // バリデーションの追加
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // パスワード確認フィールドを追加
        ]);

        // 新規ユーザー作成
        $user = new User;
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // パスワードをハッシュ化して保存
        $user->save();

        // 自動的にログインさせる
        Auth::login($user);

        return redirect('/')->with('success', 'アカウントが作成されました');
    }
}
