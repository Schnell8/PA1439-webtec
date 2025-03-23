<div class="two-col-layout-article">
    <main class="main">

        <?php foreach ($res as $row) :
            $userEncoded = urlencode($row['id']);
            $urlToProfile = "single_article.php?article=" . htmlentities($userEncoded);
            ?>
            <div class="container-all">
                <div>
                    <h2><?= htmlentities($row['title']) ?? ""?></h2>
                    <p><?= htmlentities(substr($row['content'], 0, 150) ?? "") ?>... <a href="<?= $urlToProfile ?>">läs mer</a></p>
                </div>
            </div>
        <?php endforeach ?>

    </main>

    <aside class="aside">
        <h1>Samlingssida</h1>
        <p>Med hjälp av dessa artiklar får du chansen att grotta ner dig ytterligare i historian. Samtidigt får du perspektiv på i vilket sammangang de olika objekten passade in.</p>
        <p>De flesta artiklar är skrivna av grundaren Ronny Holm men vi har även fått tillåtelse att publicera innehåll från Maggy Larsson.</p>
        <p>Kika in under rubrikerna och vill du ta del av mer information kan du enkelt klicka dig vidare på tillhörande länk.</p>
    </aside>

</div>

<?php include('../view/footer.php'); ?>
