<!DOCTYPE html>

<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>PHP település bekérés</title>
    </head>
    <body>
        
        <h1>Település</h1>
        
        <form action="#" method="POST">
            <label>Település név: </label>
            <input type="text" name="telep">
            <button name="btnUdv" value="true">Köszönj!</button>
        </form>       
        
        
        <?php
            $telVar = filter_input(INPUT_POST, "telep", FILTER_SANITIZE_STRING);
                
            if (filter_input(INPUT_POST, "btnUdv", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
                echo "<br>Üdvözlünk ezen a településen: $telVar";
            }
        ?>
    
    </body>
</html>
