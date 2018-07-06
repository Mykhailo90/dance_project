<!-- <link rel="stylesheet" href="header.css"> -->
<?php
  session_start();
?>

<style>
  .vis{
    display: block;
  }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
 <script src="./js/all.js"></script>
<header>
    <nav>
      <div class="nav-wrapper" id="h1">
       <a href="index.php" class="brand-logo"><img src="./images/Logo-Mini-Chilli-Dnce-small.png"></a>
       <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">Меню</i></a>

      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Конкурс</a></li>
        <?php
                  $a = '<li><a href="generat_room.php" title="моя страница">Мой кабинет</a></li>';
                  $b = '<li><a href="participate.php">Учавствовать</a></li>';
                  if (isset($_SESSION['name']) && $_SESSION['name'] != "")
                    echo  $a;
                  else {
                    echo $b;
                  }
        ?>

        <li><a href="#">Судьи</a></li>
        <li><a href="#">Контакты</a></li>
        <?php
                  $a = '<li><a href="logout.php" title="Покинуть кабинет">'.$_SESSION['name'].' / Выход </a></li>';
                  $b = '<li><a href="authorization_form.php" title="Войти в кабинет">Вход</a></li>';
                  if (isset($_SESSION['name']) && $_SESSION['name'] != "")
                    echo  $a;
                  else {
                    echo $b;
                  }
        ?>
      </ul>
      </div>
     </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Конкурс</a></li>
    <?php
              $a = '<li><a href="generat_room.php" title="моя страница">Мой кабинет</a></li>';
              $b = '<li><a href="participate.php">Учавствовать</a></li>';
              if (isset($_SESSION['name']) && $_SESSION['name'] != "")
                echo  $a;
              else {
                echo $b;
              }
    ?>
    <li><a href="#">Судьи</a></li>
    <li><a href="#">Контакты</a></li>
    <?php
                  $a = '<li><a href="logout.php" title="Покинуть кабинет">'.$_SESSION['name'].' / Выход </a></li>';
                  $b = '<li><a href="authorization_form.php" title="Войти в кабинет">Вход</a></li>';
                  if (isset($_SESSION['name']) && $_SESSION['name'] != "")
                    echo  $a;
                  else {
                    echo $b;
                  }
        ?>
  </ul>
</header>

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RUSH00</title>
    <link rel="stylesheet" href="header.css">
  </head>
  <body>

<?php
  // require_once 'get_urls.php';
?>

<div class="container_page">
    <div class="container_page">
      <table>
        <tr>
          <td rowspan="2" class="logo_block">
            <a href="index.php">
            <?php
            // echo  '<img src="'.$ar_url[pit4sport_logo]
            // .'" alt="Logo_Pit4Sport">';
            ?>
            </a>
          </td>
          <td class="title"><h1 class="site_title">Интернет-магазин спортивного питания</h1></td>
          <td class="basket_block" rowspan="2">
            <table>
              <tr>
                <td class="basket">
                  <a href="basketS.php">
                  <?php
                  // if ($_SESSION['goods'] != ""){
                  //   echo  '<img src="'.$ar_url[basket]
                  //   .'" alt="foto_basket" id="basket_img">';
                  // }
                  // else {
                  //   echo  '<img src="'.$ar_url[basket_ampty]
                  //   .'" alt="foto_basket" id="basket_img">';
                  // }
                  ?>
                  </a>
                </td>
                <td>
                  <strong>Добавлено:</strong>
                  <?
                  // =$_SESSION['goods_count']
                  ?> шт.<br/>
                  <strong>На сумму:</strong><?
                  // =$_SESSION['all_check']
                  ?> грн.<br/>
                  <a class="disp" href='basketS.php'>Оформить заказ</a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td class="phone">
            <table>
              <tr>
                <td class="call_block">
                  <?php
                  // echo  '<img src="'.$ar_url[call_img]
                  // .'" alt="call_img">';
                  ?>
                </td>
                <td id="pn">
                  <p id="phone_number">+38(073)050-77-55</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <div class="nav_menu">
        <table>
          <tr class="head_menu">
            <td>
              <ul id="nav">
                <li>
                  <?php
                    // $a = '<a href="index.php" title="Вернуться на главную страницу">Главная</a>';
                    // $b = '<a href="admin_main.php" title="Вернуться на главную страницу">Главная</a>';
                    // if ($_SESSION['name'] == "admin")
                    //   echo "$b";
                    // else {
                    //   echo "$a";
                    // }
                   ?>

                </li>
              </ul>
            </td>
            <td>
              <ul id="nav">
                <li>
                  <a href="#">Каталог</a>
                  <ul>
                    <?php
                        // foreach ($ar_catalog as $key => $value) {
                        //   echo  '<li><a href="#"><form class="ccc" action="generator.php" method="post"><input type="submit" class="category" name="'.$key
                        //   .'" value="'.$value.'" /></form>'.'</a></li>';
                        // }
                    ?>
                  </ul>
                </li>
              </ul>
            </td>
            <td>
              <ul id="nav">
                <li>
                  <a href="pay_rules.php" title="Условия оплаты">Условия оплаты</a>
                </li>
              </ul>
            </td>
            <td>
              <ul id="nav">
                <li>
                  <a href="contacts.php" title="Контакты">Контакты</a>
                </li>
              </ul>
            </td>
            <td>
              <ul id="nav">
                <li>
                  <?php
                  // $a = '<a href="logout.php" title="Покинуть кабинет">'.$_SESSION['name'].' / Выход </a>';
                  // $b = '<a href="authorization_form.php" title="Войти в кабинет">Регистрация / Вход</a>';

                  // if (isset($_SESSION['name']) && $_SESSION['name'] != "")
                  //   echo  $a;
                  // else {
                  //   echo $b;
                  // }
                  ?>
                </li>
              </ul>
            </td>
          </tr>
        </table>
    </div> -->
