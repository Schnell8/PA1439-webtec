<div class="two-col-layout-object">
    <main class="main">

        <?php foreach ($res as $row) :
            $userEncoded = urlencode($row['id']);
            $urlToProfile = "single_object.php?object=" . htmlentities($userEncoded);
            ?>
            <div class="container-all">
                <div>
                    <h2><?= htmlentities($row['category']) ?? ""?></h2>
                    <p><?= htmlentities(substr($row['text'], 0, 25) ?? "") ?>... <a href="<?= $urlToProfile ?>">läs mer</a></p>
                </div>
                <figure>
                    <img src="../public/img/80x80/<?= htmlentities($row['image'] ?? "") ?>" alt="museum">
                </figure>
                
            </div>
        <?php endforeach ?>

    </main>

    <aside class="aside">
        <h1>Samlingssida</h1>
        <p>Här finns alla våra objekt samlade, totalt <?= count($res) ?> stycken.</p>
        <p>Vi är väldigt stolta över att kunna visa upp dessa objekt för allmänheten och hoppas ni ska kunna finna lika mycket glädje i det som vi.</p>
        <p>Kika på bilderna och vill du ta del av mer information kan du enkelt klicka dig vidare på länken bredvid.</p>
    </aside>

</div>

<?php include('../view/footer.php'); ?>
