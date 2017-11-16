<?php require 'header.php'  ?>
<?php
session_start();
require('dbInfo.php');

if(isset($_POST['email']) and isset($_POST['password'])) {
$email = $_POST['email'];
$password = $_POST['password'];


$loginQuery = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password' ";

$loginResult = mysqli_query($dbConnect, $loginQuery) or die(mysqli_error($dbConnect));
$loginCount = mysqli_num_rows($loginResult);
$loginRow = $loginResult -> fetch_assoc();
$_SESSION['user_name'] = $loginRow['name'];
$_SESSION['user_id'] = $loginRow['id'];


if($loginCount == 1){
  $_SESSION['email'] = $email;
} else {
  echo "Wrong e-mail or password";
}

}



if (isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  echo "Welcome  $email";
  header("Location: /index.php");
  echo "<a class='btn btnlg btn-primary' href='logoff.php'>Log off</a>";

  print_r ($_SESSION['id']);
  print_r ($_SESSION['name']);
}

?>
<center>
  <form class="login_form " method="post">
    <input type="text" name="email" placeholder="E-Mail" required>
    <br>
    <input type="password" name="password" placeholder="Password" required>
    <br>
    <button class="btn btn-lg btn-primary" type="submit">Login</button>
  </form>
</center>




<?php require 'footer.php' ?>
