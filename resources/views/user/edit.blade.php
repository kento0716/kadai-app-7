<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

    <title>kadai-app | プロフィール編集</title>
</head>
<!-- プロフィール編集画面 -->

<body class="">
    <x-header></x-header>
    <div class="page user-edit-page">
        <form action="/user/edit/{{ $user->id }}" method="post">
            @csrf @method('PUT')
            <div class="user-info">
                <div class="user-name">
                    <label for="name">ユーザー名</label>
                    <input class="name" type="text" name="username" value="{{ $user->name }}" />
                </div>
                <div class="biography">
                    <label for="biography">自己紹介</label>
                    <textarea name="biography" id="" cols="30" rows="10">{{ $user->biography }}</textarea
                        >
                    </div>
                </div>
                <div class="save-button">
                    <button class="button-white">変更を保存</button>
                </div>
            </form>
        </div>
    </body>
    <script src="{{ asset('/js/app.js') }}"></script>
    <style scoped>
        .user-edit-page .user-name {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .user-edit-page .biography {
            display: flex;
            flex-direction: column;
        }

        .user-edit-page .save-button {
            display: flex;
            justify-content: end;
            margin: 10px 10px 0 0;
        }

        .user-edit-page label {
            padding-left: 5px;
        }
    </style>
</html>