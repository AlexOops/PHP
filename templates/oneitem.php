<!doctype html>

<h2> Картинка - <?= $picture['name'] ?> </h2>

<img src="/img/gallery/big/<?= $picture['name'] ?>" alt="">
<span style="position: absolute; margin-left: -10px; color: white;"><?= $picture['views'] ?></span>