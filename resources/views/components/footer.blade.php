<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>
<!-- 共通フッター -->

<body>
    <footer>
        <form action="/post" methot="get">
            <button class="button-white" type="submit">投稿する</button>
        </form>
    </footer>
</body>

<style scoped>
    footer {
        background-color: gray;
        height: 50px;
        width: 100vw;
        z-index: 10;
        position: fixed;
        bottom: 0;
        display: flex;
        justify-content: end;
        align-items: center;
    }
    
    footer button {
        margin-right: 10px;
    }
</style>

</html>