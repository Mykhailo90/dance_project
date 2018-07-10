<!-- Здесь необходимо добавить все данные в БД и сохранить данные пользователя в сессию перенаправив в личный кабинет -->
<?php
session_start();
// var_dump($_POST);
// echo "<br><br><br>";
// var_dump($_FILES);
if (isset($_POST['first_name']))
{
  $first_name = $_POST['first_name'];
  if ($first_name == '')
    unset($first_name);
}
if (isset($_POST['last_name']))
{
  $last_name = $_POST['last_name'];
  if ($last_name == '')
    unset($last_name);
}
if (isset($_POST['password']))
{
  $password = $_POST['password'];
  if ($password =='' || strlen($password) < 6)
    unset($password);
}
  if (isset($_POST['password2']))
  {
    $password2 = $_POST['password2'];
    if ($password2 =='')
      unset($password2);
  }
if (isset($_POST['email']))
{
  $email = $_POST['email'];
  if ($email == '')
    unset($email);
}
if (isset($_POST['phone']))
{
  $phone = $_POST['phone'];
  if ($phone == '')
    unset($phone);
}
if (isset($_POST['city']))
{
  $city = $_POST['city'];
  if ($city == '')
    unset($city);
}

if (empty($first_name) or empty($last_name) or empty($password)
  or empty($password2) or empty($email) or empty($phone)
  or empty($city))
  exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!!!");
elseif ($password !== $password2)
  exit ("Проверьте корректность ввода пароля!");
elseif (!isset($_POST['school']) && $_POST['school_name'] == '')
  exit ("Необходимо заполнить информацию о школе");

$first_name = stripslashes($first_name);
$first_name = htmlspecialchars($first_name);

$last_name = stripslashes($last_name);
$last_name = htmlspecialchars($last_name);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$password2 = stripslashes($password2);
$password2 = htmlspecialchars($password2);

$email = stripslashes($email);
$email = htmlspecialchars($email);

$phone = stripslashes($phone);
$phone = htmlspecialchars($phone);

$city = stripslashes($city);
$city = htmlspecialchars($city);

$femine = stripslashes($_POST['femine']);
$femine = htmlspecialchars($femine);

if ($_POST['school'] == "enter_school" && $_POST['school_name'] == '')
  exit ("Необходимо заполнить информацию о школе");
elseif ($_POST['school'] == "enter_school") {
  $school_name = stripslashes($_POST['school_name']);
  $school_name = htmlspecialchars($school_name);
}

$first_name = trim($first_name);
$last_name = trim($last_name);
$password = trim($password);
$password2 = trim($password2);
$password = password_hash($password, PASSWORD_DEFAULT);
$email = trim($email);
$phone = trim($phone);
$city = trim($city);
$school_name = trim($school_name);
$femine = trim($femine);

//Выгрузка фото на сервер

@mkdir("members_images", 0777);
$uploads_dir = './members_images';

foreach ($_FILES["foto"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["foto"]["tmp_name"][$key];
        $name = basename($_FILES["foto"]["name"][$key]);
        $name = $last_name."_".$name;
        if(!move_uploaded_file($tmp_name, "$uploads_dir/$name"))
            echo "error upload file";
            else {
                echo '<img src="'.$uploads_dir.'/'.$name.'"/>';
              $foto = $name;
            }
    }
    else {
      exit ("Возникла проблема загрузки фото! Повторите попытку регистрации!");
    }
}
$foto = stripslashes($foto);
$foto = htmlspecialchars($foto);
$foto_path = $uploads_dir.'/'.$name;



echo "$first_name<br>$last_name<br>$email<br>$phone<br>$city<br>$password<br>$password2<br>$school_name<br>$foto<br>$foto_path";

 ?>
