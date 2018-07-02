<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>reg_form</title>
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
    </style>
  </head>
  <body>
    <h1>Регистрационная форма</h1>
    <form class="reg_form" action="add_member.php" method="post">
      <strong>Соло</strong><input class="but" id="n1" name="change" type="radio" value="solo" />
      <strong>Шоу группа</strong><input class="but" id="n2" name="change" type="radio" value="show" />
      <strong>Пара</strong><input class="but" id="n3" name="change" type="radio" value="group" />


      <!-- Регистрационная форма для Соло -->


      <!-- Регистрационная форма для Пары -->

      <!-- Регистрационная форма для Шоуномера -->
    </form>
  </body>
</html>
