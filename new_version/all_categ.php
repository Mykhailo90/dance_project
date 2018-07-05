<?php
    session_start();

    if (!isset($_SESSION['name']) || $_SESSION['name'] == "")
    {
      if (isset($_COOKIE['name']))
        $_SESSION['name'] = $_COOKIE;
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <title>Festival</title>
</head>
<body>
    <div class="container">
         <?php
           require_once 'header.php';
           require_once 'only_categ.php';
           require_once 'footer.php';
         ?>
    </div>
</body>
</html>
