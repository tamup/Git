<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="test.php" method="get">
  Jsi GAY? <input type="text" name="text1"> 

  <input type="submit">
</form>
  <br>
    Vysledek: <?php echo $_GET["text1"]?>

  </body>
</html>
