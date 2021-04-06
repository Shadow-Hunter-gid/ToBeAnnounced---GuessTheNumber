<html>
    <head>
        <title>Raad het nummer</title>
    </head>
    <body>
        <h1>Raad het nummer</h1>
        <form method="post">
            <label for="gokken">Het getal is tussen 1 en 120</label>
            <input type="number" height="2em" id="gokken" min="1" max="120" name="gokje">
            <input type="hidden" value="<?php // echo $hetNummer; ?>" name="hetNummer">
            <input type="hidden" value="<?php // echo $counter; ?>" name="counter">
            <input type="hidden" value="<?php // echo $average; ?>" name="average">
            <?php  
                /*   
                    loop maken voor eerdere pogingen?

                    iets maken voor de hint
                
                */ 
            ?>
            <input type="submit">
        </form>
        
    </body>
</html>
