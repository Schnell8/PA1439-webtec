<?php

$title     = htmlentities($res['title'] ?? "");
$content   = htmlentities($res['content'] ?? "");
$pubdate   = htmlentities($res['pubdate'] ?? "");

?>

<main class="main">

    <div class="about">
        <div>
            <h1><?= $title ?></h1>
            <p><?= $content ?></p>
            <p>Publicerat: <?= $pubdate ?></p>
        </div>

        <div class="about-me">
            <div>
                <h1>Hej från andra sidan!</h1>
                <p>Mitt namn är Christopher Schnell. Jag är 28 år gammal, född och uppvuxen i Ystad, Skåne, där jag fortfarande bor tillsammans med min sambo. I hela mitt liv har jag sysslat med någon typ av sport och intresset för datorer har alltid funnits där. Idag spelar jag handboll på elitnivå och pluggar programmering. Tidigare jobbade jag under 6 år på skola som elevassistent.</p>
                <p>Jag har fått i uppgift att ta fram ett schysst digitalt begravningsmuseum. Titta dig omkring och se vad du tycker.</p>
            </div>

            <div>
                <figure>
                    <img src="img/30889.png" width="300" class="me" alt="Bild på mig">
                </figure>
            </div>
        </div>

        <a href="doc.php">doc.php</a>

    </div>

</main>

<?php include('../view/footer.php'); ?>
