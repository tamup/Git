<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>


    <form action="MAD_LIBS.php" method="get">

      barva:
      <br> 
        <input type="text" name="barva"> <br>
      podstatne jmeno:
      <br>
        <input type="text" name="podstjmeno">
      <br>
      osoba:
      <br>
       <input type="text" name="osoba"> <br>

      <input type="submit">
    </form>
    <br><br>

      <?php
        $barva = $_GET["barva"];
        $podstjmeno = $_GET["podstjmeno"];
        $osoba = $_GET["osoba"];
        echo "Ruze jsou $barva <br>";
        echo "$podstjmeno jsou modre <br>"; 
        echo "Miluji $osoba <br>";
      ?>  





  </body>
</html>
