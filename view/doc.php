<main class="main">
    <div class="doc">
        <h1>Doc</h1>
        <h4>Berätta om din kodstruktur som ligger bakom din webbplats. Berätta hur du tänkte när du organiserade din kod för webbplatsen.</h4>
        <p>Mina ledord har varit lätt och smidigt och det tycker jag att strukturen visar. Varje sida har sin sidkontroller med tillhörande vy. I sidkontrollern får jag en tydlig överblick på mitt flöde. Jag använder PHP för att hämta data från databasen. Vårt fetchade resultat används i vy-filen och där kan jag omvandla datan via html kod till en faktiskt webbsida. Att vara tydlig med att tilldela html elementen klasser är en viktig punkt för att göra designbiten enklare, inte minst den responsiva delen.</p>

        <h4>Berätta hur väl din sida fungerar responsivt.</h4>
        <p>Headern fick jag justera något där navbaren krångla lite och resultatet blev kanske inte det bästa då den skiljer sig i proportion och avstånd till resterande sida. I övrigt var det mest att ändra mina flex-boxar till vanliga block vilket gjorde att innehållet staplades under varandra istället för bredvid. När jag går in på mobilen tycker jag att sidan ser schysst ut, återspeglar originalet på ett bra sätt och fungerar som den ska utan att tappa konceptet. Med det sagt är jag nöjd med hur min sida fungerar responsivt.</p>

        <h4>Ge förslag på ett par förbättringar du ser att man skulle kunna göra på din webbplats, i ett fiktivt vidareutvecklingsprojekt.</h4>
        <p>Designen skulle jag givetvis vilja jobba mer på, det går att göra så otroligt mycket mer. Jag valde att hålla det på en lagom nivå utan att grotta ner mig för mycket och slukas av det oändliga ”designhålet”.</p>
        <p>Något som retade gallfeber på mig är att datan som hämtas från databasen innehåller html kod vilket gör att tecken som ”p” och ”a” syns i texten. Jag lyckades uppdatera innehållet för att slippa alla onödiga tecken men de längre texterna blir mer eller mindre oläsbara då de saknar styckavdelning.</p>
        <p>Givetvis skulle jag även vilja ge mig på de optionella kraven för att utmana mig själv. Visserligen är saker vi redan lärt oss men det hade varit kul att tillämpa dem i mitt eget projekt.</p>
        <p>I övrigt ser jag inte några större förbättringsområden. Koden är väldigt enkel och lätthanterlig, likaså webbsidan i sin helhet.</p>
    </div>
</main>

<?php include('../view/footer.php'); ?>
