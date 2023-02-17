<?php 
    $paragraph = "Piantala con sti bonghi
    Non siamo mica in Africa
    Porti i capelli lunghi
    Ma devi fare pratica
    Sei sempre fuori tempo
    Così mi uccidi l'Africa
    Che avrà pure tanti problemi
    Ma di sicuro non quello del ritmo";

    $paragraphCensored = str_replace($_GET['badword'], '***', $paragraph);

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

        <p>
            La tua brutta parola è: <?php echo $_GET['badword']; ?>
        </p>

        <form action="" method="GET">

            <input type="text" name="badword" placeholder="Scrivi una brutta parola...">
            <button>
                Invia
            </button>
        </form>

        <p>
            Paragrafo censurato: <?php echo $paragraphCensored ?>
        </p>
        <p>
            Lunghezza del paragrafo censurato: <?php echo strlen($paragraphCensored); ?>
        </p>
    </body>
</html>