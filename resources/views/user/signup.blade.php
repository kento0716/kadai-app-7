<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 新規登録</title>
</head>

<body>
    <x-header></x-header>
    <div class="page signup-page">
        <form class="form" action="/login" method="post">
            @csrf <!-- CSRF保護 -->
            <div class="form-item email">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" />
            </div>

            <div class="form-item password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
            </div>

            <!-- エラーメッセージの表示 -->
            @if ($errorMessage)
                <div class="error-message font-red">{{ $errorMessage }}</div>
            @endif

            <div class="login-button">
                <button class="button-white" type="submit">Login</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>

<style scoped>
    .signup-page {
        display: flex;
        justify-content: center;
    }

    .signup-page .title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .signup-page .form {
        width: 60vw;
    }

    .signup-page input {
        height: 30px;
        border-radius: 10px;
        background-color: lightgray;
    }

    .signup-page .form-item {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }

    .signup-page .login-button {
        text-align: center;
        margin-top: 10px;
    }

    .signup-page button {
        width: 50%;
        height: 30px;
        font-size: 18px;
    }

    .signup-page .error-message {
        margin-top: 5px;
        font-size: 12px;
        color: red;
    }
</style>

</html>
