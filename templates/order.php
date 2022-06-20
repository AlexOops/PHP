<?php if (!is_admin()) die("Доступ запрешен!"); ?>

<h3><?= $title ?><?= $order['id'] ?></h3>
<p>Имя: <?= $order['name'] ?></p>
<p>Номер телефона: <?= $order['phone'] ?></p>
<p>Стоимость заказа: <?= $sum ?> рублей</p>
<div>
    <p>Детали заказа: </p>
    <?php foreach ($items as $item) : ?>
        <div style="border: 1px solid black; width: 170px; text-align: center; padding-bottom: 10px;">
            <p><?= $item['product_name'] ?></p>
            <img src="../img/<?= $item['img'] ?>" alt="<?= $item['product_name'] ?>" width="150">
            <p><?= $item['price'] ?> руб/сутки</p>
        </div>
        <br>
    <?php endforeach; ?>
</div>


