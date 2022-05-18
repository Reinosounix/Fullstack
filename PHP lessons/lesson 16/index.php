<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <?php
  if (isset($_POST["submit"])) {

    $name = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];
    $size = $_FILES["file"]["size"];
    $fileerror = $_FILES["file"]["error"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $permanentdestination = "./" . $_FILES["file"]["name"];

    $allowedFormats = array("pdf" => "application/pdf", "text" => "text/plain");

    if ($fileerror == 4) {
      $errors .= $noFiletoUpload;
    } else {
      if (file_exists($permanentdestination)) {
        $errors .= $fileAlreadyExists;
      }
      if ($size > 3 * 1024 * 1024) {
        $errors .= $fileTooLarge;
      }
      if (!in_array($type, $allowedFormats)) {
        $errors .= $wrontFormat;
      }
    }

    if ($errors) {
      $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>';
      echo $resultMessage;
    } else {
      if (move_uploaded_file($tmp_name, $permanentdestination)) {
        //        $resultMessage = '<div class="alert alert-success">File uploaded successfuly</div>'; 
        //         echo $resultMessage;
        header("Location: thanksForm.php");
      } else {
        $resultMessage = '<div class="alert alert-warning"Unable to upload file. Please try again later.></div>';
        echo $resultMessage;
      }
    }
  }
  ?>


  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-offset-1 col-sm-10">
        <h1>Upload file</h1>
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="file">Choose file:</label>
            <input type="file" name="file" id="file" placeholder="File">
            <div>
              <input type="submit" name="submit" value="Upload" class="btn btn-success btn-lg">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>