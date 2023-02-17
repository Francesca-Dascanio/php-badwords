<?php 
    $paragraph = "Oh, mama, mama, mama
    I just shot a man down
    In central station
    In front of a big ol' crowd
    Oh, why? Oh, why?
    Oh, mama, mama, mama
    I just shot a man down
    In central station";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>

    <body>
        <h1>
            PHP Badwords
        </h1>
        <p>
            <?php echo $paragraph; ?>
        </p>
        <p>
            Lunghezza del paragrafo: <?php echo strlen($paragraph); ?>
        </p>
        <label for="bad-word">
            Scrivi una bad word:
        </label>
        <input type="text" id="bad-word" name="bad-word">
        <button>
            Invia
        </button>
    </body>
</html>