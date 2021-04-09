
<!--Onafgemaakte functies-->

<!--Functie die eerder gerade getallen in een lijst weergeeft-->
<!--De getallen verschijnen voordat het juiste getal geraden is-->
Eerder gerade getallen: <?php echo $_POST["gokje"]; ?>

<!--Functie die een hint geeft indien de speler hierom vraagt-->
<!--Functie geeft twee random values die zich binnen 0 en 10 van het antwoord bevinden-->
Hint: het getal bevindt zich tussen 
<?php echo $_POST["hetNummer"] - rand(10); ?> en 
<?php echo $_POST["hetNummer"] + rand(10); ?>

<!--Functie die het gemiddeld aantal pogingen over meerdere speelbeurten laat zien-->
Het gemiddelde aantal pogingen: <?php echo $_POST["gokje"]; ?>

<!--Als het maximale aantal pogingen wordt overschreden houdt het spel op-->
<!--Dit aantal kan eventueel standaard of door de speler worden ingesteld-->
<?php
    // Voeg de volgende dingen toe aan guess the number: 
    // 1. Welke getallen zijn eerder geraden
    // 2. Het maximale aantal pogingen waarbij het spel ophoudt
    // 3. Vraag het spel evt. een hint
    // 4. Het gemiddelde aantal pogingen over meerdere speelbeurten
    $max = 10;
    if ($max = $counter) {
        echo "Game Over<br>";
    } else {
        echo "Guess Again<br>";
    }
?>