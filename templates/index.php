<div class="login">
    <?php if ($auth): ?>
        Добро пожаловать! <?= $login ?> <a href="/logout">[Выход]</a>
    <?php else: ?>
        <form action="/login" method="post">
            <input type="text" name="login" value="user">
            <input type="password" name="pass" value="123">
            <input type="checkbox" name="save">
            <input type="submit" value="ok">
        </form>
    <?php endif; ?>
</div>
