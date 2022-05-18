<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send Email</title>
</head>

<body>

  <form method="post" action="index.php">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  $to = "Deardeath_17@hotmail.com";
  $subject = "Test";
  $message = "This is a test email";


  if ($_POST["submit"]) {
    echo mail($to, $subject, $message);
  }
  ?>
</body>

</html>