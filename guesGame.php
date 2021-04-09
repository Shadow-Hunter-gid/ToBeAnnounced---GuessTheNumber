<html>
    <head>
        <?php include "functions.php"?>
        <link rel="stylesheet" href="style.css">
        <title>Raad het nummer</title>
    </head>
    <body>
        <h1>Raad het nummer</h1>
        <form method="post">
            <label for="gokken">Het getal is tussen 1 en 120</label>
            <input type="number" height="2em" id="gokken" min="1" max="120" name="gokje">
            <input type="hidden" value="<?php 
            if (isset($_POST["hetNummer"])) {
                echo $_POST["hetNummer"];                
            } else {
                echo rand(1, 120);  
            }
            
            ?>" name="hetNummer">
            <input type="hidden" value="<?php  
                if (isset($_POST["counter"])) {
                    $counter = $_POST["counter"];
                    $counter++;
                    echo $counter;
                } else {
                    echo 0;
                }
                
            ?>" name="counter">
            <input type="hidden" value="<?php //echo $average; ?>" name="average">
            <?php  
                /*   
                    loop maken voor eerdere pogingen?

                    iets maken voor de hint
                
                */ 
            ?>
            <input type="submit">
        </form>
        
        <?php
            
            if (isset($_POST["hetNummer"])) {
                echo "<p>";
                if ($_POST["hetNummer"] > $_POST["gokje"]) {
                    echo "Guess higher<br>";
                } elseif ($_POST["hetNummer"] < $_POST["gokje"]) {
                    echo "Guess lower<br>";
                } else {
                    echo "Correct<br>";
                }   
                
                if (isset($_POST["counter"])){
                    echo $_POST["counter"];
                }
                 echo "</p>";
            }
           
        ?>
        <form method="post" action="guesGame.php">
            <input type="submit" value="Reset" name="reset">
        </form>
        <?php
            $_POST["hetNummer"] = rand(1, 120);
        ?>



        <?php
            echo guessedNumbers(37);
        ?>
    </body>
</html>
