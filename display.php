<?php
include 'sms.php';

$mesages = new Message();
$mesages->fetchSMS();


?>

<!DOCTYPE html>
<html lang="en">


  <!-- This Allows the page to reload every 10 seconds  -->
<meta http-equiv="refresh" content="3" />

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ads</title>

  <!-- Bootstrap core CSS -->
  <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <!-- Page Content -->
  <div class="row container-fluid" style="max-height:100vh; padding: 0px; margin:0px;">
    <div class="col-md-3" style=" padding: 0px; margin:0px;">
      <ul class="list-group">
        <?php
foreach (array_reverse($mesages->messages) as $key => $value) {
  if ($key > 6) {
    continue;
}
    ?>
        <li class="list-group-item">
          <strong>
          <?php

    echo $value;
    ?>
    </strong>
        </li>
        <?php
}
?>
      </ul>
    </div>
    <div class="col-md-9" style=" padding: 0px; margin:0px;">
      <div class="row container-fluid" style="max-height:100vh; padding: 0px; margin:0px;">
        <div class="col-md-6" style="padding: 0px; margin:0px;">
          <div class="card" style="width: 100%;">
            <img width="100%" style="height: 50vh;" class="img-responsive" src="./uploads/image1.png"
              alt="./images/sample.jpg">

          </div>
        </div>
        <div class="col-md-6" style="padding: 0px; margin:0px;">
          <div class="card" style="width: 100%;">
            <img width="100%" style="height: 50vh;" class="img-responsive" src="./uploads/image2.png"
              alt="./images/sample.jpg">

          </div>
        </div>
      </div>

      <div class="row container-fluid" style="max-height:100vh; padding: 0px; margin:0px;">
        <div class="col-md-6" style="padding: 0px; margin:0px;">
          <div class="card" style="width: 100%;">
            <img width="100%" style="height: 50vh;" class="img-responsive" src="./uploads/image3.png"
              alt="./images/sample.jpg">

          </div>
        </div>
        <div class="col-md-6" style="padding: 0px; margin:0px;">
          <div class="card" style="width: 100%;">
            <img width="100%" style="height: 50vh;" class="img-responsive" src="./uploads/image4.png"
              alt="./images/sample.jpg">

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="resources/jquery/jquery.slim.min.js"></script>
  <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
