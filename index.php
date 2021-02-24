<!-- DICHIARAZIONE VARIABILI -->
<?php
  $paragrafo = 'Oggi il sole splende per ';
  $badWord = $_GET['badWord'];
  $newParagrafo = $paragrafo . $badWord;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Get</title>
  </head>
  <body>

    <p> $paragrafo iniziale <?php echo $paragrafo ; ?> </p>
    <p> $badWord scelta = <?php echo $badWord ; ?></p>
    <p> $badWord modificata = <?php $badWord = '***'; echo $badWord; ?></p>
    <p> $newParagrafo = <?php echo $paragrafo . $badWord; ?> </p>
  ​  <p> La lunghezza totale del paragrafo è : <?php echo $lunghezzaTot = strlen($newParagrafo); ?></p>



  </body>
</html>
