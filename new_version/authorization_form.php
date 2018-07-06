
<?php
  require_once 'header.php';
 ?>
<style media="screen">
  #img5{
    width: 100%;
  }
  #reg_btn{
    width: 100%;
    text-align: center;
    background-color: red;
    margin-bottom: 100px;
  }
  #btn2{
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
  input::placeholder{
       color:red;
  }
  main{
    max-width: 700px;
    margin: auto;
  }

</style>
 <main>
   <h1>Регистрационная форма</h1>
   <div class="row">
   <form class="col s12">
     <div class="row">
       <div class="input-field col s6">
         <input placeholder="Ваше имя" id="first_name" type="text" class="validate">
         <label for="first_name"><strong class="w">Введите имя</strong></label>
       </div>
       <div class="input-field col s6">
         <input placeholder="Фамилия" id="last_name" type="text" class="validate">
         <label for="last_name"><strong class="w">Введите фамилию</strong></label>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s6">
         <input placeholder="email" id="email" type="email" class="validate">
         <label for="email"><strong class="w">Электронный адрес</strong></label>
       </div>
       <div class="input-field col s6">
         <input placeholder="+380667777777" id="phone" type="text" class="validate">
         <label for="phone"><strong class="w">Введите номер телефона</strong></label>
       </div>
     </div>
     <!-- Строка для ввода города и последующего вывода списка школ с возможностью добавить школу и автоматическим внесением школы в БД -->
     <div class="row">
       <div class="input-field col s6">
         <input placeholder="6+ символов" id="password" type="password" class="validate">
         <label for="password"><strong class="w">Пароль</strong></label>
       </div>
       <div class="input-field col s6">
         <input placeholder="6+ символов" id="password2" type="password" class="validate">
         <label for="password2"><strong class="w">Повторите ввод</strong></label>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s6">
         <input placeholder="Киев" id="city" type="text" class="validate">
         <label for="city"><strong class="w">Ваш город</strong></label>
       </div>
       <div class="input-field col s6">
           <a href="authorization_form.php" id="btn2" class="waves-effect waves-light btn-large">Подтвердить</a>
       </div>
     </div>
   </form>
 </div>
   <img id="img5" src="./images/reg_f1.jpg" alt="sexy">
   <div class="col s4 offset-s3">
     <a href="authorization_form.php" id="reg_btn" class="waves-effect waves-light btn-large">Отправить</a>
   </div>
 </main>
<?php
  require_once 'footer.php';
 ?>
