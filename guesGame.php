<html>
    <head>
        <?php //include "functions.php"?>
        <link rel="stylesheet" href="style.css">
        <title>Raad het nummer</title>
    </head>
    <body>
        <h1>Raad het nummer</h1>
        <form method="post">
            <label for="gokken">Het getal is tussen 1 en 120</label>
            <input type="number" id="gokken" min="1" max="120" name="gokje">
            <input type="hidden" value="<?php 
            // Functie die het nummer random genereert 
            // binnen een waarde van 1 en 120
            if (isset($_POST["hetNummer"])) {
                echo $_POST["hetNummer"];                
            } else {
                echo rand(1, 120);  
            }
            
            ?>" name="hetNummer">
            <input type="hidden" value="<?php  
            // Functie die de waarde verbergt 
            // en bij elke poging de counter verhoogt
                if (isset($_POST["counter"])) {
                    $counter = $_POST["counter"];
                    $counter++;
                    echo $counter;
                } else {
                    echo 1;
                }
                
            ?>" name="counter">
            <input type="hidden" value="<?php //echo $average; ?>" name="average">
            <?php  
                /*   
                    loop maken voor eerdere pogingen?

                    iets maken voor de hint
                
                */ 
            ?>
            <input type="submit" <?php 
                // Functie voor het maximale aantal pogingen
                // Bij de 10e poging wordt de knop gedisabled
                // De speler heeft verloren
                if (isset($_POST["counter"])) {
                    if ($_POST["counter"] == 10){ 
                        echo "disabled";
                    }
                }
                ?>>
        </form>
        <?php
            // Functie die de guess vergelijkt met het antwoord
            // en de speler vertelt of het antwoord hoger of lager ligt
            if (isset($_POST["hetNummer"])) {
                echo "<p>";
                if ($_POST["hetNummer"] > $_POST["gokje"]) {
                    echo "Guess higher<br>";
                } elseif ($_POST["hetNummer"] < $_POST["gokje"]) {
                    echo "Guess lower<br>";
                } else {
                    echo "Correct<br>";
                }   
                if (isset($_POST["counter"])) {
                    echo $_POST["counter"];
                }
                echo "</p>";
            }   
        ?>
        <form method="post" action="guesGame.php">
            <input type="submit" value="Reset" name="reset">
        </form>
    </body>
</html>
