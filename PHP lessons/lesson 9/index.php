<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET & POST</title>
</head>

<body>

  <form method="get" action="index.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <input type="submit" name="submit" value="Submit">
  </form>

  <form method="post" action="index.php">
    <label for="country">Country:</label>
    <input type="text" name="country" id="country">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if($_GET["submit"]){
      if($_GET["username"]){
        echo "<h3>Hi " . $_GET["username"] . ". Welcome!<h3/>";
      }
    }
    if($_POST["submit"]){
      if($_POST["country"]){
        echo "<h3>The country is " . $_POST["country"] ."<h3/>";
      }
    }

  ?>
</body>

</html>