<h2><?= $title ?></h2>

<?php foreach ($news as $item) : ?>
    <a href="/onenews/?id=<?= $item['id'] ?>"><p><?= $item['name'] ?></p></a>
<?php endforeach; ?>