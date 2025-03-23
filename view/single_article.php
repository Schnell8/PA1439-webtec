<?php

$id        = htmlentities($res['id'] ?? "");
$category  = htmlentities($res['category'] ?? "");
$title     = htmlentities($res['title'] ?? "");
$content   = htmlentities($res['content'] ?? "");
$author    = htmlentities($res['author'] ?? "");
$pubdate   = htmlentities($res['pubdate'] ?? "");

?>
<main class="main">

    <div class="single-art">
        <h1><?= $title ?></h1>
        <p class="art-text"><?= $content ?></p>
        <p class="art-italic"><?= $author ?></p>
        <p class="art-italic">Publicerat <?= $pubdate ?></p>
        <a href="../public/article.php">Tillbaka</a>
    </div>

</main>

<?php include('../view/footer.php'); ?>
