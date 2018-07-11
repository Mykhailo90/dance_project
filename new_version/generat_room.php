<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Festival</title>
  <style media="screen">

  .container h1{
    font-size: 350%;
    /* color: green; */
  }
  .container h3{
    font-size: 125%;
    text-align: left;
  }
    header, nav{
      height: 105px;
    }
    h1{
      text-align: center;
      font-style: italic;
    }
    #mf{
      width: 70px;
      height: 70px;
      margin: 10px;
    }
    .nav_menu{
      max-width: 600px;
    }
    .ital{
      font-style: italic;
      color: #4db6ac;
    }
    .nav_menu .row{
      border: 1px solid red;
    }



  </style>
</head>
<body>
    <div class="container">
         <?php
           require_once 'header.php';
          ?>
            <h1>Личный кабинет</h1>

            <ul class="collapsible expandable">
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
              </ul>









            <ul id="bord" class="collection">
   <li class="collection-item avatar">
     <img id="mf" src="./members_images/SOLD_14.jpg" alt="" class="circle">
     <br>
     <span class="title">Мои категории</span>
         <a href="#!" class="secondary-content"><i class="material-icons">Смотреть</i></a>
   </li>
   <li class="collection-item avatar">
     <img src="./members_images/SOLD_14.jpg" alt="" class="circle">
     <br>
     <span class="title">Добавить категорию</span>
     <a href="#!" class="secondary-content"><i class="material-icons">Выбрать</i></a>
   </li>
   <li class="collection-item avatar">
     <img src="./members_images/SOLD_14.jpg" alt="" class="circle">
     <br>
     <span class="title">Список участников</span>
     <a href="#!" class="secondary-content"><i class="material-icons">Показать</i></a>
   </li>
   <li class="collection-item avatar">
     <img src="./members_images/SOLD_14.jpg" alt="" class="circle">
     <br>
     <span class="title">Рекомендации организаторам</span>
     <a href="#!" class="secondary-content"><i class="material-icons">Написать</i></a>
   </li>
 </ul>

          <?php
           require_once 'footer.php';
         ?>
    </div>
</body>
</html>







<!-- <style media="screen">
main{
  text-align: center;
}
  h1{

    font-size: 6vw;
  }
  #pers_inf{
    margin-top: 90px;
  }
</style>
<main>
  <div id="pers_inf" class="col s12 m8 offset-m2 l6 offset-l3">

          <div class="row valign-wrapper">
            <div class="col s8">
              <h1>Личный кабинет</h1>
            </div>


          </div>
      </div>
</main> -->
