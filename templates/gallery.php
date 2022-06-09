<h2><?= $title ?></h2>

<div style="position: relative">
    <?php foreach ($pictures as $item): ?>
        <a href="/oneitem/?id=<?= $item['id'] ?>"><img src="/img/gallery/small/<?= $item['name'] ?>" alt="<?= $item['name'] ?>" width="150"></a>
        <span style="position: absolute; margin-left: -10px; color: white;"><?=$item['views']?></span>
    <?php endforeach; ?>
</div>
<br>

<?= $message ?>

<form method="post" enctype="multipart/form-data" action="">
    <input type="file" name="myfile">
    <input type="submit" value=" Загрузить ">
</form>
