<h2><?= $title ?></h2>
<br>

<?php if (!empty($basket)): ?>

    <?php foreach ($basket as $item) : ?>
        <div style="border: 1px solid black; width: 170px; text-align: center; padding-bottom: 10px;">
            <p><?= $item['product_name'] ?></p>
            <img src="../img/<?= $item['img'] ?>" alt="<?= $item['product_name'] ?>" width="150">
            <p><?= $item['price'] ?> руб/сутки</p>
            <a class="button" href="/basket/del/?id=<?= $item['basket_id'] ?>">Удалить</a>
        </div>
        <br>
    <?php endforeach; ?>

    Итого: <?= $sum ?> рублей
    <br>
    <form action="/basket/order/" method="post">
        <input type="text" name="name" placeholder="Alex">
        <input type="tel" name="phone" placeholder="+79999999">
        <input type="submit" value="Оформить заказ">
    </form>

    <?= $message ?>

<?php else: ?>
    <?= "Корзина пустая" ?>
<?php endif; ?>


