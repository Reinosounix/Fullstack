<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .contactForm {
      border: 1px solid #7c73f6;
      margin-top: 50px;
      border-radius: 15px;
    }
  </style>

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10 contactForm">
        <h1>Contact us:</h1>
        <?php

        $name = $_POST["name"] ?? "";
        $email = $_POST["email"] ?? "";
        $message = $_POST["message"] ?? "";
        $errors = "";
        $resultMessage = "";

        $missing = array(
          "<p><strong>Please enter your name!</strong></p>",
          "<p><strong>Please enter your email address!</strong></p>",
          "<p><strong>Please enter a valid email address!</strong></p>",
          "<p><strong>Please enter a message!</strong></p>"
        );

        $success = "Thanks for your message. We will get back to you soon";

        if (isset($_POST["submit"])) {

          if (!$name) {
            $errors .= $missing[0];
          } else {
            $name = htmlspecialchars($name);
          }
          if (!$email) {
            $errors .= $missing[1];
          } else {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $errors .= $missing[2];
            }
          }
          if (!$message) {
            $errors .= $missing[3];
          } else {
            $message = htmlspecialchars($message);
          }

          if ($errors) {
            $resultMessage = '<div class="alert alert-danger" role="alert">' . $errors . '</div>';
          } else {
            // $resultMessage = '<div class="alert alert-success">' . $success . '</div>';
            header("Location: thanksForm.php");
          }
          echo $resultMessage;
        }
        ?>

        <form action="index.php" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="">
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="5"></textarea>
          </div>
          <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message">
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </script>
</body>

</html>