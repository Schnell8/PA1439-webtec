<?php

$id        = htmlentities($res['id'] ?? "");
$title     = htmlentities($res['title'] ?? "");
$category  = htmlentities($res['category'] ?? "");
$text      = htmlentities($res['text'] ?? "");
$image     = htmlentities($res['image'] ?? "");
$owner     = htmlentities($res['owner'] ?? "");

?>

<main class="main">

    <div class="container-single">
        <div>
            <p class="obj-text"><?= $text ?></p>
            <p class="obj-category">Kategori: <?= $category ?></p>
            <a href="../public/object.php">Tillbaka</a>
        </div>

        <figure>
            <img class="single-img" src="../public/img/550/<?= $image ?>" alt="museum">
            <figcaption class="fig-title"><?= $title ?>.</figcaption>
            <figcaption class="fig-owner">Ägs av <?= $owner ?></figcaption>
        </figure>
    </div>

</main>

<?php include('../view/footer.php'); ?>
