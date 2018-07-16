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
    .icon{
      width: 50px;
      height: 50px;
    }
    #choose h3{
      text-align: center;
      color:red;
      font-weight: bold;
      font-style: italic;
    }
    #choose{
      text-align: center;
      margin: auto;
    }
    #sg{
      margin-top: -40px;
    }
    .element{
      border: solid 2px blue;
      text-align: center;
      width: 200px;
      height: 310px;
      float: left;
      margin: 30px;
      box-shadow: 5px 10px #888888;
      text-align: center;
    }
    .element:hover {
      -webkit-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2);
      transition: 0.5s;
    }
    .el{
      width: 150px;
    }
    .mega_cont
    {
      margin: auto;
      display: inline;
    }
    .mega_cont:last-child{
      margin-bottom: 100px;
    }
    .sale{
      padding: 10px 24px;
      border: solid 2px blue;
    }
    .fc{
      text-align: center;
      width: 100%;
      margin: auto;
    }
    .collapsible-body h3{
      text-align: center;
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
                  <div class="collapsible-header row"><div class="col s10">
                    <h3>Мои категории</h3>
                  </div>
                  <div class="col s2">
                    <img class="icon" src="./images/fb.png">
                   </div>
                </div>
                  <div class="collapsible-body"><span>Чтобы учавствовать в конкурсе Выберите пожалуйста категории</span></div>
                </li>
                <li>
                <div class="collapsible-header row"><div class="col s10">
                    <h3>Выбрать категорию</h3>
                  </div>
                  <div class="col s2">
                    <img class="icon" src="./images/fb.png">
                   </div>
                </div>
                  <div id="choose" class="collapsible-body">
                  <?php
                    require_once 'db_connect.php';
                    $sql = "SELECT * FROM style_info;";
                    $result = mysqli_query ($db, $sql);
                    

                    if($result)
                    {
                      //Получаем количество элементов
                        $rows = mysqli_num_rows($result);
                        $y = 0; $x = 0;
                        for ($i = 0 ; $i < $rows ; ++$i)
                        {
                          $row = mysqli_fetch_assoc($result);
                          if (preg_match('/.*Beginners$/', $row['name_category'])){
                            $group_style[$y]['id'] = $row['id_category'];
                            $group_style[$y]['name'] = $row['name_category'];
                            $y++;
                          }
                          else {
                            if (preg_match('/show/', $row['name_category']))
                            continue;
                            $solo_style[$x]['id'] = $row['id_category'];
                            $solo_style[$x]['name'] = $row['name_category'];
                            $x++;
                          }
                        }
                        mysqli_free_result($result);
                    }
                  ?>
                  <h3 id="sg">Шоу группа</h3>

                  <div class="row">
                    <div class="fc col m9 offset-m3 l9 offset-l3 xl8 offset-xl4">
                      <div class="element">
                        <div class="img">
                        <!-- пока вставим малое фото, заменить на логотип категории -->
                          <img class="el" src="<?php echo './images/reg_f2.png' ?>">
                         </div>
                       <p><?php echo 'Best show'?>
                
                        <br>
                       <?php echo '500 grn'?>
                        </p>
                        <!-- Нужно понять как добавлять категорию к покупке или к оплате -->
                    <form class="" action="add/<?php echo '16' ?>" method="post">
                  <input type="submit" value="Регистрация" class="sale"
                             name="<?php echo '16' ?>"></form>
                    </div>
                    </div>
                  </div>
                  
                  <h3>Парные категории (только для новичков)</h3>

                  <div class="row">
                    <div class="fc col l10 offset-l2 xl10 offset-xl2">
                    <?php foreach ($group_style as $categItem):?>
                      <div class="element">
                        <div class="img">
                        <!-- пока вставим малое фото, заменить на логотип категории -->
                          <img class="el" src="<?php echo './images/reg_f2.png' ?>">
                         </div>
                       <p><?php echo $categItem['name']?>
                
                        <br>
                       <?php echo '500 grn'?>
                        </p>
                        <!-- Нужно понять как добавлять категорию к покупке или к оплате -->
                    <form class="" action="add/<?php echo $judjeItem['id'] ?>" method="post">
                  <input type="submit" value="Регистрация" class="sale"
                             name="<?php echo $categItem['id'] ?>"></form>
                    </div>
                  <?php endforeach;?>
                    </div>
                  </div>

                  <h3>Cоло</h3>

                  <div class="row">
                    <div class="fc col l10 offset-l2 xl10 offset-xl2">
                    <?php foreach ($solo_style as $categItem):?>
                      <div class="element">
                        <div class="img">
                        <!-- пока вставим малое фото, заменить на логотип категории -->
                          <img class="el" src="<?php echo './images/reg_f2.png' ?>">
                         </div>
                       <p><?php echo $categItem['name']?>
                
                        <br>
                       <?php echo '500 grn'?>
                        </p>
                        <!-- Нужно понять как добавлять категорию к покупке или к оплате -->
                    <form class="" action="add/<?php echo $judjeItem['id'] ?>" method="post">
                  <input type="submit" value="Регистрация" class="sale"
                             name="<?php echo $categItem['id'] ?>"></form>
                    </div>
                  <?php endforeach;?>
                    </div>
                  </div>

                  </div>
                </li>
                <li>
                <div class="collapsible-header row"><div class="col s10">


                    <h3>Посмотреть участников</h3>


                    <?php
                    
                    $sql2 = "SELECT foto, first_name, last_name FROM members_info;";
                    $result = mysqli_query ($db, $sql2);
                    mysqli_close($db);

                    if($result)
                    {
                      //Получаем количество элементов
                        $rows = mysqli_num_rows($result);
                        
                        for ($i = 0 ; $i < $rows ; $i++)
                        {
                          $row = mysqli_fetch_assoc($result);
                          
                            $members[$i] ['foto'] = $row['foto'];
                            $members[$i]['first_name'] = $row['first_name'];
                            $members[$i]['last_name'] = $row['last_name'];
                          }
                        }
                        mysqli_free_result($result);

                  ?>
                        

                

                  </div>
                  <div class="col s2">
                    <img class="icon" src="./images/fb.png">
                   </div>
                </div>
                  <div class="collapsible-body"><h3 id="sg">Все участники</h3>
                  <?php foreach ($members as $Item):?>
                      <div class="row">
                        <div class="col s6 m4 l4 xl4">
                        <!-- пока вставим малое фото, заменить на логотип категории -->
                          <img width='120' src="<?php echo $Item['foto'] ?>">
                         </div>
                         <div class="col s6 m8 l8 xl8">
                            <p>  <?php echo $Item['first_name'] . ' '?> <?php echo $Item['last_name']?></p>
                         </div>
                    </div>
                  <?php endforeach;?>
                  
                  </div>
                  
                </li>
                <li>
                <div class="collapsible-header row"><div class="col s10">
                    <h3>Мои оценки</h3>
                  </div>
                  <div class="col s2">
                    <img class="icon" src="./images/fb.png">
                   </div>
                </div>
                  <div class="collapsible-body"><span>Информация об оценках будет доступна после закрытия 
                  этапа оценивания выступлений в категории. </span></div>
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
