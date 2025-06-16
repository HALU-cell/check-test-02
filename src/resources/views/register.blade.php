<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index/css') }}">
</head>
<body>
    <header>
        <div>
            <a href="/">
            mogitate
            </a>
        </div>
    </header>

    <main>
        <div>
            <div>
                <h2>商品登録</h2>
            </div>
            <div>
                <div>
                    <p>商品名</p>
                    <input type="text">
                </div>
            </div>
            <div>
                <div>
                    <p>値段</p>
                    <input type="text">
                </div>
            </div>
            <div>
                <div>
                    <p>商品画像</p>
                    <input type="file">
                </div>
            </div>
            <div>
                <div>
                    <p>季節</p>
                    <input type="radio"><!--ここに季節テーブルのラヂオボタン-->
                </div>
            </div>
            <div>
                <div>
                    <p>商品説明</p>
                    <input type="textarea">
                </div>
            </div>
            <div>
                <div>
                    <a href="/">戻る</a>
                </div>
                <div>
                    <button>登録</button>
                </div>
            </div>
        </div>
    </main>
</body>
