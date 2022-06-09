<div class="product">
    <h3 style="padding-bottom: 10px"><?= $product['product_name'] ?></h3>
    <img src="/img/<?= $product['img'] ?>" alt="<?= $product['product_name'] ?>" width="150px" height="150px">
    <p style="padding-top: 10px"><?= $product['description'] ?></p>
    <p style="padding-top: 10px"><b><?= $product['price'] ?> рублей/сутки </b></p>

    <div class="like"><p id="<?= $product['id'] ?>"> like: <?= $product['like'] ?></p>
        <button class="btn-like" data-id="<?= $product['id'] ?>">like</button>
    </div>

    <a href="/oneproduct/buy/?id=<?= $product['id'] ?>">В корзину</a>
</div>

<h2><?= $title ?></h2>
<span style="padding-bottom: 30px">&nbsp;<?= $message ?></span>
<form method="post" action="/oneproduct/<?= $action ?>/">
    <input type="text" name="id_product" value="<?= $id_product ?>" hidden>
    <input type="text" name="id_feedback" value="<?= $id_feedback ?>" hidden>
    <input type="text" name="name" placeholder="name" value="<?= $name ?>">
    <input type="text" name="feedback" placeholder="text " value="<?= $feedback ?>">
    <input type="submit" value="<?= $button ?>">
</form>
<?php foreach ($feedbacks as $feedback): ?>
    <p><b><?= $feedback['name'] ?></b>: <span><?= $feedback['feedback'] ?></span>
        <a href="/oneproduct/edit/?id=<?= $id_product ?>&id_feedback=<?= $feedback['id'] ?>">[edit]</a>
        <a href="/oneproduct/delete/?id=<?= $id_product ?>&id_feedback=<?= $feedback['id'] ?>">[X]</a></p>
<?php endforeach; ?>

<script>

    let buttons = document.querySelectorAll('.btn-like');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch("/oneproduct/addlike/?id=" + id);
                    console.log(response);
                    const answer = await response.json();
                    document.getElementById(id).innerText = answer.like;
                }
            )();
        })
    })

</script>