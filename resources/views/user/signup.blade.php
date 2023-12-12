<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 新規登録</title>
</head>
<!-- ログイン画面 -->

<body class="">
    <x-header></x-header>
    <div class="page singup-page">
        <h2>課題: ここに新規登録ページを作ること</h2>
        <h3>必要なフォームパーツ</h3>
        <ul>
            <li>Email入力フォーム</li>
            <li>パスワード入力フォーム</li>
            <li>登録ボタン</li>
        </ul>
        <h3>バリデーションルール</h3>
        <h4>メールアドレス</h4>
        <ul>
            <li>●●●@×××の形式になっていること</li>
            <li>半角英数、記号のみを許容すること</li>
        </ul>
        <h4>パスワード</h4>
        <ul>
            <li>半角英数、記号のみを許容すること</li>
            <li>8文字以上であること</li>
        </ul>
        <p>
            JavascriptとUserControllorの両方で同じバリデーションを設けること
        </p>
    </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped></style>

</html>