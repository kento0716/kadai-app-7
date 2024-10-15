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
        <h2><form class="form" action="/login" method="post"></h2>
        <h3><div class="form-item email"></h3>
        <ul>
            <li><label for="email">Email</label></li>
            <input type="text" id="email" name="email" /></li>
            
            <li><div class="form-item password">
            <label for="password">Password</label>
                <input type="password" id="password" name="password" />
            
            </div>
            @if ($errorMessage)
            <div class="error-message font-red">{{ $errorMessage }}</div>
            @endif
            <div class="login-button">
                <button class="button-white" type="submit">login</button>
            </div>
        </form>
    </div>
</body></li>
        </ul>
        <h3>バリデーションルール  action="/tasks/{{ $item->id }}"
    method="post"
        </h3>
        <h4> <label for="email">Email</label></h4>
        <ul>
            <li> <div class="form-item email">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" />
            </div></li>
            <li>半角英数、記号のみを許容すること</li>
        </ul>
        <h4><div class="form-item password"></h4>
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
<style scoped>
.login-page {
        display: flex;
        justify-content: center;
    }
    
    .login-page .title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }
    
    .login-page .form {
        width: 60vw;
    }
    
    .login-page input {
        height: 30px;
        border-radius: 10px;
        background-color: lightgray;
    }
    
    .login-page .form-item {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }
    
    .login-page .login-button {
        text-align: center;
        margin-top: 10px;
    }
    
    .login-page button {
        width: 50%;
        height: 30px;
        font-size: 18px;
    }
    
    .login-page .error-message {
        margin-top: 5px;
        font-size: 10px;
    }
</style>
</html>