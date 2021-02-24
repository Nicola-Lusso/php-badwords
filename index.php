<!-- DICHIARAZIONE VARIABILI -->
<?php
  $paragrafo = 'Oggi il sole splende per ';
  $badWord = $_GET['badWord'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Get</title>
  </head>
  <body>

    <p> <?php echo $paragrafo ; ?> </p>
    <p> <?php echo $badWord ; ?></p>
    <p><?php $badWord = '***'; echo $badWord; ?></p>
    <p> <?php echo $paragrafo . $badWord; ?> </p>
  ​



  </body>
</html>
