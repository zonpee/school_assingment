<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>試験問題アプリ</title>
    <link rel="stylesheet" href="https://unpkg.com/@acab/reset.css">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <header>
        <div class="title">
            <a href=".">試験問題アプリ</a>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="./useradd">新規登録</a></li>
                <li><a href="./login">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('contents')
    </main>
    <footer>
        <small>&copy; 2024 ZonoZono All rights reserved</small>
    </footer>
</body>
</html>