<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mogitate</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
            mogitate
            </a>
        </div>
    </header>

    <main>
        <div class="product-list__content">
            <div class="product-list__header">
                <h2>商品一覧</h2>
                <div class="product-list__header-button">
                    <button>商品を追加</button>
                </div>
            </div>
            <div class="product">
                <form class="product__search" action="/products/search" method="get">
                <?php echo csrf_field(); ?>
                    <div class="product__search-form">
                        <input type="text" name="keyword" value="<?php echo e(old('keyword')); ?>" placeholder="商品名で検索">
                    </div>
                    <div class="product__search-button">
                        <button type="submit">検索</button>
                    </div>
                    <div class="product__search-sort">
                        <div class="product__search-sort--price">
                            <p>価格順で表示</p>
                        </div>
                        <div class="product__search-sort--select">
                            <select name="price" id="">高い順に表示</select>
                            <option value=""></option>
                        </div>
                        <div class="product__search-sort--log">
                        </div>
                    </div>
                </form>
                <div class="product__content">
                    <div class="product__list">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="product__block" href="/products/<?php echo e($product->id); ?>">
                            <img class="product__block--img" src="<?php echo e(asset($product->image)); ?>" alt="">
                            <div class="product__block--item">
                                <p><?php echo e($product->name); ?></p>
                                <p><?php echo e($product->price); ?></p>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php echo e($products->links()); ?>

        </div>
    </main>

</body>
</html>
<?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>