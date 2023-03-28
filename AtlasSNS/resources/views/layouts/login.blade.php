<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
    <!-- jQuery -->
    <script src="js/jquery-3.6.1.min.js"></script>
</head>
<body>
    <!-- jQuery file-->
    <script src="js/script.js"></script>
    <!-- content -->
    <header>
        <!-- <div id = "header_block"> -->
            <!-- 1:ヘッダーロゴ -->
            <div class="header_logo">
                <!-- <h1> -->
                    <a href="/top"><img src="images/atlas.png"></a>
                <!-- </h1> -->
            </div>
            <!-- 2:ヘッダーユーザーネーム -->
            <div class="header_user"><p>{{ Auth::user()->username }}さん</p></div>
            <!-- 3:アコーディオンメニュー -->
            <div class="ac_menu">
            <p class="nav-open"></p>
            <nav>
                <ul>
                    <li><a href="/top">HOME</a></li>
                    <li><a href="/profile">プロフィール編集</a></li>
                    <li><a href="/logout" method="get">ログアウト</a></li>
                </ul>
            </nav>
            </div>
            <!-- 4:ヘッダーアイコン -->
            <div class=""><img src="{{ asset('storage/images/'. Auth::user()->images) }}"></div>

        <!-- </div> -->
    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>{{ Auth::user()->username }}さんの</p>
                <div>
                <p>フォロー数</p>
                <!-- ログイン情報 -> Userモデルのfollowsメソッド -> 情報を取得 -> 情報の数を数える -->
                <p>{{ Auth::user()->follows()->get()->count() }}名</p>
                </div>
                <p><a href="/followList" class="btn btn_hover ">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>{{ Auth::user()->followers()->get()->count() }}名</p>
                </div>
                <p><a href="/followerList" class="btn btn_hover ">フォロワーリスト</a></p>
            </div>
            <p ><a href="/search" class="btn btn_hover ">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>
    <!-- <script src="JavaScriptファイルのURL"></script>
    <script src="JavaScriptファイルのURL"></script> -->
</body>
</html>
