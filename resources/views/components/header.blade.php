<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>
<!-- 共通ヘッダー -->

<body>
    <header>
        <a href="/">
            <div class="logo">Kadai-app</div>
        </a>
        @if (Session::exists('user'))
        <div class="user-wapper">
            <a href="/user/{{ Session::get('user')->id }}">
                <div class="user">
                    <img class="user-icon" src="{{ asset('/img/user_icon.png') }}" alt="" />
                    <div class="username">
                        {{ $loginUser = Session::get('user')->name }}
                    </div>
                </div>
            </a>
            <form name="logout" action="/logout" method="post">
                @csrf
                <div id="logout" class="logout">ログアウト</div>
            </form>
        </div>
        @else
        <div class="menu">
            <div class="menu-item"><a href="/login">ログイン</a></div>
            <div class="menu-item"><a href="/signup">新規作成</a></div>
        </div>
        @endif
    </header>
</body>
<style scoped>
    header {
        background-color: gray;
        color: whitesmoke;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        width: 100vw;
        padding: 0 10px;
        z-index: 10;
        position: fixed;
        top: 0;
    }
    
    header .logo {
        font-size: 25px;
        font-weight: bold;
    }
    
    header .user-icon {
        width: 40px;
        height: 40px;
    }
    
    header .user {
        display: flex;
        font-size: 16px;
    }
    
    header .username {
        line-height: 40px;
    }
    
    header .logout {
        font-size: 12px;
        text-align: end;
    }
    
    header .menu {
        display: flex;
        font-size: 12px;
    }
    
    header .menu-item {
        margin: 0 3px;
        padding: 3px;
        border: solid 1px whitesmoke;
        border-radius: 5px;
    }
</style>

</html>