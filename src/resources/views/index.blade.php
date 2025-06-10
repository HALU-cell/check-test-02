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
        <article>
            <div class="side">
                <h2>商品一覧</h2>
                <form class="form">
                    <div class="search">
                        <input type="text" placeholder="商品名で検索">
                    </div>
                    <div class="button">
                        <button>検索</button>
                    </div>
                </form>
                <div class="sort">
                    <div>
                        <p>価格順で表示</p>
                    </div>
                    <div>
                        <select name="price" id="">高い順に表示</select>
                        <option value=""></option>
                    </div>
                    <div class="sort-log">
                    </div>
                </div>
            </div>
            <div class="content">
                <div>
                    <button>商品を追加</button>
                </div>
                <div>
                    <!--ダミーデータ挿入-->
                </div>
            </div>
        </article>
    </main>

</body>
</html>
