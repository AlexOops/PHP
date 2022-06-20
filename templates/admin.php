<?php if (!is_admin()) die("Доступ запрешен!"); ?>
<h2><?= $title ?></h2>

<p>Добро пожаловать в личный кабинет!</p>


<?php if (!empty($orders)): ?>

    <?php foreach ($orders as $item) : ?>

        <div class="order">
            <p class="order__name"><?= $item['name'] ?></p>
            <p class="order__phone"><?= $item['phone'] ?></p>
            <a class="button order__add" href="/order/?id=<?= $item['id'] ?>">Детали заказа</a>
            <a class="button order__del" href="/admin/del/?id=<?= $item['id'] ?>">[X]</a>
        </div>
    <?php endforeach; ?>

<?php else: ?>
    <p class="order-zero">Заказов пока еще нет!</p>
<?php endif; ?>
