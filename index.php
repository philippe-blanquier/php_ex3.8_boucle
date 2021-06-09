<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 3.8 boucle</title>
    </head>
    <body >
        <p>
            <?php
            for ($idx=200; $idx >=0; $idx-=12)
            {
                echo nl2br($idx." Enfin !!!!\n");
            }
            ?>
       </p>
    </body>
</html>