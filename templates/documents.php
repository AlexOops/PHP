<h2><?= $title ?></h2>
<?php foreach ($files as $file) : ?>
    <a href="/documents/<?= $file ?>"><?= $file ?></a>
<?php endforeach; ?>
