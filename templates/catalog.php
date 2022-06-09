<h2><?= $title ?></h2>

<?php foreach ($products as $item) : ?>
    <div style="margin-bottom: 20px">
        <p><?= $item['product_name'] ?></p>
        <a href="/oneproduct/?id=<?= $item['id'] ?>">
            <img src="/img/<?= $item['img'] ?>" alt="<?= $item['product_name'] ?>" width="150px" height="150px">
        </a>
        <p><?= $item['price'] ?> руб/сутки</p>
        <a href="/oneproduct/?id=<?= $item['id'] ?>">Забронировать</a>
    </div>
<?php endforeach; ?>

