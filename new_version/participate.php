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
  <!-- <script src="./js/search_categ.js"></script> -->
  <style media="screen">
    #h2{
      text-align: right;
    }
    .ic, strong{
      margin-right: 30px;
    }
    header, nav{
      height: 150px;
    }
    h1{
      text-align: center;
    }
    #img2{
      width: 100%;
    }
    #reg_btn{
      width: 100%;
      text-align: center;
      background-color: red;
      margin-top: 30px;
      margin-bottom: 70px;
    }
  </style>
  <title>Festival</title>
</head>
<body>
         <?php
           include 'header.php';
        ?>
    <main class="container">
      <h1>Условия участия</h1>
      <p>The Tampa Salsa & Bachata Festival 2018 will be held Aug. 31 - Sept. 3 at the beautiful Hilton in Downtown Tampa Bay. TSBF is a celebration of Latin culture through live music and dance attended by a diverse international audience. During the day, TSBF provides attendees the ability to relax in a tropical environment with DJs mixing outside by the pool or beach. Also, for attendees looking to be adventurous or take their dancing skills to the next level we provide instructional dance classes from beginner to advanced with a line-up of World class local and international dance artist.
        At night, TSBF brings out the entertainment! Each evening begins with live dance showcases that are sure to wow any audience with a mix of acrobatic, sexy and high-energy performances. We then move on to live music with internationally recognized artist and then end the evening with some of the best tropical music DJs in the world to ensure you dance the entire night away. TSBF is an event that provides something for everyone and in our 7th edition Labor Day weekend 2018, we hope you join us for the fun.</p>
        <img id="img2" src="./images/bachata2.jpg" alt="sexy">
        <p>The Tampa Salsa & Bachata Festival 2018 will be held Aug. 31 - Sept. 3 at the beautiful Hilton in Downtown Tampa Bay. TSBF is a celebration of Latin culture through live music and dance attended by a diverse international audience. During the day, TSBF provides attendees the ability to relax in a tropical environment with DJs mixing outside by the pool or beach. Also, for attendees looking to be adventurous or take their dancing skills to the next level we provide instructional dance classes from beginner to advanced with a line-up of World class local and international dance artist.
          At night, TSBF brings out the entertainment! Each evening begins with live dance showcases that are sure to wow any audience with a mix of acrobatic, sexy and high-energy performances. We then move on to live music with internationally recognized artist and then end the evening with some of the best tropical music DJs in the world to ensure you dance the entire night away. TSBF is an event that provides something for everyone and in our 7th edition Labor Day weekend 2018, we hope you join us for the fun.</p>
          <p>The Tampa Salsa & Bachata Festival 2018 will be held Aug. 31 - Sept. 3 at the beautiful Hilton in Downtown Tampa Bay. TSBF is a celebration of Latin culture through live music and dance attended by a diverse international audience. During the day, TSBF provides attendees the ability to relax in a tropical environment with DJs mixing outside by the pool or beach. Also, for attendees looking to be adventurous or take their dancing skills to the next level we provide instructional dance classes from beginner to advanced with a line-up of World class local and international dance artist.
            At night, TSBF brings out the entertainment! Each evening begins with live dance showcases that are sure to wow any audience with a mix of acrobatic, sexy and high-energy performances. We then move on to live music with internationally recognized artist and then end the evening with some of the best tropical music DJs in the world to ensure you dance the entire night away. TSBF is an event that provides something for everyone and in our 7th edition Labor Day weekend 2018, we hope you join us for the fun.</p>
            <div class="col s4 offset-s3">
              <a href="registration.php" id="reg_btn" class="waves-effect waves-light btn-large">Регистрация</a>
            </div>

    </main>
        <?php
           require_once 'footer.php';
        ?>
</body>
</html>
