
<?php
  require_once 'header.php';
 ?>
 <script type="text/javascript">

//Функция добавит поле для ввода названия школы путем удаления класса сокрытия

function create_input(){
    document.getElementById("sn").classList.remove('unvis');
}

// При загрузке страницы будут активированы выпадающие списки для моб версии

 $(document).ready(function(){

     $('select').formSelect();



     $("#school").change(function(){

       if ($( "#school" ).val() == "enter_school"){
         $("#u1").addClass("unvis");
         create_input();
       }
     });
   });

// Задается значение по нажатию кнопки Без Школы

function w3s(){
  document.getElementById("school_name").value = "none";
  document.getElementById("u1").classList.add("unvis");

}

// Функция минимальной валидации полей ввода информации

 function validate_form(){
   var e =/^\+(\d+)$/;
   var e2 = /^(\S+)@(\S+)$/;
  if (document.getElementById("first_name").value != "" &&
      document.getElementById("last_name").value != "" &&
      document.getElementById("email").value != "" &&
      document.getElementById("phone").value != "" &&
      document.getElementById("city").value != "" &&
      document.getElementById("password").value != "" &&
      document.getElementById("password2").value != "" &&
      e.test(document.getElementById("phone").value) &&
      e2.test(document.getElementById("email").value) &&
      document.getElementById("password").value == document.getElementById("password2").value &&
      document.getElementById("password").value.length > 5
){
    document.getElementById("reg_btn").classList.remove('disabled');
    document.getElementById("btn2").classList.add("unvis");

    document.getElementById("u1").classList.remove('unvis');
    document.getElementById("u2").classList.remove('unvis');
    document.getElementById("u3").classList.remove('unvis');
  }
  else {
    if (document.getElementById("first_name").value == "")
      alert("Пожалуйста введите имя!");
    else if (document.getElementById("last_name").value == ""){
      alert("Пожалуйста введите фамилию!");
    }
    else if (document.getElementById("email").value == "" ||
            e2.test(document.getElementById("email").value) == false){
      alert("Электронный адрес введен некорректно");
    }
    else if (document.getElementById("phone").value == "" ||
            e.test(document.getElementById("phone").value) == false){
      alert("Номер телефона введен некорректно");
    }
    else if (document.getElementById("password").value == "" ||
        document.getElementById("password").value.length < 6 ||
            document.getElementById("password").value
            != document.getElementById("password2").value){
      alert("Пароли введены некорректно");
    }
  }
 }
 </script>





<style media="screen">
  #img5{
    width: 100%;
  }
  #reg_btn{
    width: 100%;
    height: 60px;
    text-align: center;
    background-color: red;
    margin-bottom: 100px;
    margin-left: 0px;
    margin-right: 0px;
  }
  #btn2, #btnX{
    width: 100%;
    text-align: center;
    background-color: red;
    margin-top: -10px;
  }
  h1{
    margin-top: 90px;
    text-align: center;
    font-size: 260%;
    font-weight: bold;
  }
  .w{
    color: black;
    opacity: 1;
    font-weight: bold;
    font-style: italic;
  }
  .unvis{
    display: none;
  }
  input::placeholder{
       color:red;
  }
  main{
    max-width: 700px;
    margin: auto;
  }
  #u2 label{
    margin-left: 50px;
    vertical-align: top;
  }
  #foto{
    margin-top: 20px;
  }

  ::-webkit-file-upload-button {
    background: red;
    color: white;
    padding: 1em;
  }


</style>


 <main>
   <h1>Регистрационная форма</h1>
   <div class="row" id="base">
   <form id="reg" class="col s12" action="reg.php" method="post" enctype="multipart/form-data">
     <div class="row">
       <div class="input-field col s12 l6 m12 xl6">
         <input form="reg" placeholder="Ваше имя" id="first_name" name="first_name" type="text" class="validate">
         <label for="first_name"><strong class="w">Введите имя</strong></label>
       </div>
       <div class="input-field col s12 l6 m12 xl6">
         <input form="reg" placeholder="Фамилия" id="last_name" name="last_name" type="text" class="validate">
         <label for="last_name"><strong class="w">Введите фамилию</strong></label>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s12 l6 m12 xl6">
         <input placeholder="Киев" id="city" name="city" type="text" class="validate">
         <label for="city"><strong class="w">Ваш город</strong></label>
       </div>
       <div class="input-field col s12 l6 m12 xl6">
         <input placeholder="+380667777777" id="phone" name="phone" type="text" class="validate">
         <label for="phone"><strong class="w">Введите номер телефона</strong></label>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s12 l6 m12 xl6">
         <input placeholder="6+ символов" id="password" name="password" type="password" class="validate">
         <label for="password"><strong class="w">Пароль</strong></label>
       </div>
       <div class="input-field col s12 l6 m12 xl6">
         <input placeholder="6+ символов" id="password2" name="password2" type="password" class="validate">
         <label for="password2"><strong class="w">Повторите ввод</strong></label>
       </div>
     </div>
       <div class="row">
         <div class="input-field col s12 l6 m12 xl6">
           <input form="reg" placeholder="email" id="email" name="email" type="email" class="validate">
           <label for="email"><strong class="w">Электронный адрес</strong></label>
         </div>
         <div class="input-field col s12 l6 m12 xl6">
             <a id="btn2" onclick="validate_form()" class="waves-effect waves-light btn-large">Подтвердить</a>
         </div>
         <div id="u2" class="input-field col s12 l6 m12 xl6 unvis">
           <div class="col s6 l4 m4 offset-m2 xl4">
           <label>
              <input name="femine" type="radio" value="M" checked />
              <span class="w">Мужчина</span>
            </label>
          </div>
          <div class="col s6 l2 m6 xl2">
            <label>
              <input name="femine" type="radio" value="Ж" />
              <span class="w">Женщина</span>
            </label>
          </div>
         </div>
     </div>
     <div id="u3" class="row unvis">
       <div class="col s10 offset-s2 m9 offset-m3">
         <label for="foto"><strong class="w">Загрузить фотографию</strong></label><br>
         <input form="reg" id="foto" name="foto[]" type="file">
       </div>
     </div>
     <div id="u1" class="row unvis s12">
       <div class="input-field col s8">
    <select id="school" name="school">
      <option value="" disabled selected>Выберите школу</option>


      <?php
      // Блок кода заполняющий варианты выбора школы из БД

      require_once 'db_connect.php';

      $sql = "SELECT * FROM schools";
      $result = mysqli_query($db, $sql);
      mysqli_close($db);
      if($result)
      {
          //Получаем количество элементов
          $rows = mysqli_num_rows($result);
          for ($i = 0 ; $i < $rows; $i++)
          {
            $row = mysqli_fetch_assoc($result);
            echo '<option value="'.$row['id'].'">'.$row['school_name'].'</option>';
          }
          mysqli_free_result($result);
        }
       ?>


      <option id="enter_school" value="enter_school">Добавить школу</option>
    </select>
    <label><strong class="w">Выбор школы</strong></label>
  </div>
       <div class="input-field col s4">
           <a id="btnX" onclick="w3s()" class="waves-effect waves-light btn-large">Без школы</a>
       </div>
   </div>

    <div id="sn" class="row unvis">
      <div class="input-field col s12">
        <input form="reg" placeholder="Название школы" id="school_name" name="school_name" type="text" class="validate">
        <label for="school_name"><strong class="w">Название школы</strong></label>
      </div>
    </div>



    <img id="img5" src="./images/reg_f1.jpg" alt="sexy">
    <!-- <div class="col s12"> -->
      <!-- <a href="reg.php" form="reg" id="reg_btn" class="waves-effect waves-light btn-large disabled">Отправить</a> -->

      <input type="submit" form="reg" name="submit" value="Отправить" id="reg_btn" class="btn disabled" >
    <!-- </div> -->
  </form>
 </div>

 </main>
<?php
  require_once 'footer.php';
 ?>
