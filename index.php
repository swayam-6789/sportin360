<?php 
session_start();
if(isset($_SESSION['user_id'])){
  header("location:home.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Sportin360</title>
</head>

<body>
  <div class="container">
    <div class="split left">
      <h1>Be an Organiser</h1>

      <a href="./signup.php?t=o" id="register" class="btn">Organiser Login</a>
    </div>
    <div class="split right">
      <h1>Be a Sports-person</h1>

      <a href="./signup.php?t=i" class="btn">Individual Login</a>
    </div>
  </div>
  <section class="header-down-arrow"><a href="home.php">
    <img src="https://cssanimation.rocks/levelup/public/images/downarrow.png" width="50"></a>
  </section>
  <script src="assets/js/script.js"></script>
</body>

</html>