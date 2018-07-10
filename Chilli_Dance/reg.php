
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>reg_form</title>
    <script type="text/javascript">
    function handleChange(checkbox) {
      if (checkbox.value == "solo"){
        var str = 'Введите имя:<br>' +
            '<input type="text" name="firstname"><br>' +
            'Введите фамилию:<br>' +
            '<input type="text" name="lastname"><br>' +
            '<input type="radio" name="gender" value="male"> Мужчина' +
            '<input type="radio" name="gender" value="female"> Женщина<br>' +
            'Название школы:<br>' +
            '<input type="text" name="school_name"><br>' +
            'Город:<br>' +
            '<input type="text" name="city"><br>' +
            'Электронный адрес:<br>' +
            '<input type="email" name="email"><br>' +
            'Номер телефона:<br>' +
            '<input type="text" name="phone"><br>' +
            'Ваше фото:<br>' +
            '<input type="file" name="foto[]"><br>';

        document.getElementById('n1').innerHTML += str;
        document.getElementById("ss").classList.remove('s');
        document.getElementById("c1").classList.remove('s');
        document.getElementById("test").classList.add('unvis');
        }
        else if (checkbox.value == "group"){
          str = 'Введите ваше имя:<br>' +
          '<input type="text" name="firstname"><br>' +
          'Введите вашу фамилию:<br>' +
          '<input type="text" name="lastname"><br>' +
          'Введите имя партнера:<br>' +
          '<input type="text" name="firstname2"><br>' +
          'Введите фамилию партнера:<br>' +
          '<input type="text" name="lastname2"><br>' +
          'Название школы:<br>' +
          '<input type="text" name="school_name"><br>' +
          'Город:<br>' +
          '<input type="text" name="city"><br>' +
          'Ваш электронный адрес:<br>' +
          '<input type="email" name="email"><br>' +
          'Электронный адрес партнера:<br>' +
          '<input type="email" name="email2"><br>' +
          'Ваш номер телефона:<br>' +
          '<input type="text" name="phone"><br>' +
          'Номер телефона партнера:<br>' +
          '<input type="text" name="phone2"><br>' +
          'Ваше фото:<br>' +
          '<input type="file" name="foto[]"><br>' +
          'Фото партнера:<br>' +
          '<input type="file" name="foto[]"><br>'
          document.getElementById('n1').innerHTML += str;
          document.getElementById("ss").classList.remove('s');
          document.getElementById("c2").classList.remove('s');
          document.getElementById("test").classList.add('unvis');
        }
        else if (checkbox.value == "show"){
          document.getElementById("n2").classList.add('vis');
          document.getElementById("test").classList.add('unvis');
         }
      }
    function do_form(){
      document.getElementById("n_2unv").classList.add('unvis');
      document.getElementById("ss").classList.remove('s');
       var count = document.getElementById("count_members").value;

       var str2 = 'Введите ваше имя:<br><input type="text" name="firstname"><br>' +
       'Введите вашу фамилию:<br>' +
       '<input type="text" name="lastname"><br>' +
       'Название шоу группы:<br>' +
       '<input type="text" name="show_name"><br>' +
       'Название номера:<br>' +
       '<input type="text" name="presentation_name"><br>' +
       'Хореограф постановщик:<br>' +
       '<input type="text" name="cheef"><br>' +
       'Название школы:<br>' +
       '<input type="text" name="school_name"><br>' +
       'Город:<br>' +
       '<input type="text" name="city"><br>' +
       'Электронный адрес:<br>' +
       '<input type="email" name="email"><br>' +
       'Номер телефона:<br>' +
       '<input type="text" name="phone"><br>' +
       'Фото группы:<br><input type="file" name="foto"><br>'
       document.getElementById('n2').innerHTML+= str2;
       var i = 2;
       while (i <= count) {
         var str = "Введите имя участника " + i;
         document.getElementById('n2').innerHTML+= str + '<input type="text" name="firstname' + i + '"><br>';
         str2 = "Введите фамилию участника " + i;
         document.getElementById('n2').innerHTML+= str2 + '<input type="text" name="lastname' + i + '"><br>';
         i++;
       }
       document.getElementById('count_members').value= i - 1;
    }
    </script>
    <style media="screen">
    body{
      text-align: center;
    }
      .but{
        width: 150px;
        height: 50px;
        background-color: lightblue;
        color: red;
        font-size: 120%;
      }
      input{
        margin-bottom: 15px;
        margin-left: 10px;
      }
      .show{
        display: none;
        margin-top: 15px;
        padding-top: 15px;
      }
      .vis{
        display: block;
      }
      .unvis{
        display: none;
      }
      .s{
        display: none;
      }
      .categ{
        /* border: 1px solid black;
        width: 25%; */
      }
    </style>
  </head>
  <body>
    <h1>Регистрационная форма</h1>
    <form class="reg_form" action="add_member.php" method="post" enctype="multipart/form-data">
      <div id="test">

      <strong>Соло</strong><input class="but" name="change" type="radio" value="solo" onchange='handleChange(this)'/>
      <strong>Шоу группа</strong><input class="but" name="change" type="radio" value="show" onchange='handleChange(this)'/>
      <strong>Пара</strong><input class="but" name="change" type="radio" value="group" onchange='handleChange(this)'/>

    </div>
      <!-- Регистрационная форма для Соло -->
      <div class="solo" id="n1"></div>
      <!-- Регистрационная форма для Пары -->
      <div class="group" id="n3"></div>
      <!-- Регистрационная форма для Шоуномера -->
      <div class="show" id="n2">
        <div id="n_2unv">
          Введите количество участников:
          <input id="count_members" type="number" name="count_members" value="">
          <input type="button" name="ask" value="Подтвердить" onclick='do_form()'><br>
        </div>
      </div>
      <?php
       require_once 'db_connect.php';

       $sql = "SELECT * FROM style_info";
       $result = mysqli_query($db, $sql);

       $sql2 = "SELECT * FROM style_info WHERE name_category LIKE '%Begin%'";
       $result2 = mysqli_query($db, $sql2);
       mysqli_close($db);
       if($result)
       {
          echo '<div id="c1" class="categ s"><h2>Выберите категории в которых желаете выступать: </h2>';
           //Получаем количество элементов
           $rows = mysqli_num_rows($result);
           for ($i = 0 ; $i < $rows ; ++$i)
           {
             $row = mysqli_fetch_assoc($result);
             echo '<input type="checkbox" name="'.$row['id_category'].'" value="'.$row['name_category'].
             '" />'.$row['name_category'].'<br>';
           }
           mysqli_free_result($result);
            echo '</div>';
         }
         if($result2)
         {
            echo '<div id="c2" class="categ s"><h2>Выберите категории в которых желаете выступать: </h2>';
             //Получаем количество элементов
             $rows = mysqli_num_rows($result2);
             for ($i = 0 ; $i < $rows ; ++$i)
             {
               $row = mysqli_fetch_assoc($result2);
               echo '<input type="checkbox" name="'.$row['id_category'].'" value="'.$row['name_category'].
               '" />'.$row['name_category'].'<br>';
             }
             mysqli_free_result($result2);
              echo '</div>';
           }
       ?>
      <input class="s" id="ss" type="submit">
    </form>
  </body>
</html>
