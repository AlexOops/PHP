<?php if (!is_admin()) die("Доступ запрешен!"); ?>

<p>Добро пожаловать в личный кабинет!</p>

<h2><?= $title ?></h2>

<?php foreach ($orders as $item) : ?>
    <div style="margin-bottom: 20px">
        <p><?= $item['name'] ?></p>
        <p><?= $item['phone'] ?></p>
        <a class="button" href="/order/?id=<?= $item['id'] ?>">Детали заказа</a>
    </div>
<?php endforeach; ?>
