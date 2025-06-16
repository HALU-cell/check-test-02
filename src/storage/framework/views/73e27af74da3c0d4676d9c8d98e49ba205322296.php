<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mogitate</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/detail/css')); ?>">
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
        <form action="/products/{productId}/update" method="post">
        <?php echo csrf_field(); ?>
            <div>
                <div>
                    <p><a href="/products">商品一覧</a>/ <?php echo e($product->name); ?></p>
                </div>
                <div>
                    <div>
                        <form action="">
                            <img src="<?php echo e(asset($product->image)); ?>" alt="">
                            <input type="file">
                        </form>
                    </div>
                </div>
                <div>
                    <div>
                        <form action="">
                            <p>商品名</p>
                            <input type="text" name="name" value="<?php echo e($product->name); ?>">
                        </form>
                    </div>
                    <div>
                        <form action="">
                            <p>値段</p>
                            <input type="text" name="price" value="<?php echo e($product->price); ?>">
                        </form>
                    </div>
                    <div>
                        <form action="">
                            <p>季節</p>
                            <input type="radio"><!--ここに季節テーブルのラヂオボタン-->
                        </form>
                    </div>
                    <div>
                        <form action="">
                            <p>商品説明</p>
                            <textarea name="description" id="" cols="30" rows="10" ><?php echo e($product->description); ?></textarea>
                        </form>
                    </div>
                    <div>
                        <div>
                            <a href="/product">戻る</a>
                        </div>
                        <div>
                            <button type="submit">変更を保存</button>
                        </div>
                        <div>
                            <a href="">削除マーク</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </main>
</body>
<?php /**PATH /var/www/resources/views/detail.blade.php ENDPATH**/ ?>