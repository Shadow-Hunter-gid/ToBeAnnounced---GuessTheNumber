<?php
    // Voeg de volgende dingen toe aan guess the number: 
    // 1. Welke getallen zijn eerder geraden
    // 2. Het maximale aantal pogingen waarbij het spel ophoudt
    // 3. Vraag het spel evt. een hint
    // 4. Het gemiddelde aantal pogingen over meerdere speelbeurten
    $history = $_POST["history"];
    $max = $_POST["maxguesses"];
    $hint = $_POST["hint"];
    $average = $_POST["average"];
    if ($max = $counter) {
        echo "Game Over<br>";
    } else {
        echo "Guess Again<br>";
    }
    $average = avg($g);
?>
Eerder gerade getallen: <?php echo $_POST["gokje"]; ?>

Hint: het getal bevindt zich tussen 
<?php echo $_POST["hetNummer"] - rand(10); ?> en 
<?php echo $_POST["hetNummer"] + rand(10); ?>

Het gemiddelde aantal pogingen: <?php echo $_POST["gokje"]; ?>
