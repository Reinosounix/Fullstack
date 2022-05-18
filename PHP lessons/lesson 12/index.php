<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filters</title>
</head>

<body>
  <?php
    $myEmail = 'asd          @///  eres.com';
    $myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
    echo $myEmail;

    $myURL = 'http://  www.google.cl';
    $myURL = filter_var($myURL, FILTER_SANITIZE_URL);
    echo "<br/>". $myURL;
  ?>
</body>

</html>