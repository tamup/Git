<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="User_Input.php" method="get">
  Name: <input type="text" name="username">
  <br>
  Credit Card Number: <input type="text" name="cardnum">
  <input type="submit">
</form>
<br>
Your name doesn't matter, <?php echo $_GET["username"]?>
<br>
But <?php echo $_GET["cardnum"]?> does.





</body>
</html>
