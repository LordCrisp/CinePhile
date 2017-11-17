<?php require 'header.php'  ?>
<?php
session_start();
require('dbInfo.php');

if(isset($_POST['email']) and isset($_POST['password'])) {
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['email'] = $email;

$loginQuery = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password' and `name` = $name";

$loginResult = mysqli_query($dbConnect, $loginQuery) or die(mysqli_error($dbConnect));
$loginCount = mysqli_num_rows($loginResult);
$loginRow = $loginResult -> fetch_assoc();
$_SESSION['user_name'] = $loginRow['name'];
$_SESSION['user_id'] = $loginRow['id'];


if($loginCount == 1){
  $_SESSION['email'] = $email;
} else {
  echo "<center class='login_error'>Wrong e-mail or password</center>";
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
    <a class="login_btn btn" href="/assets/includes/register.php" role="button">Register</a>
    <button class="login_btn btn" type="submit">Login</button>
  </form>
</center>




<?php require 'footer.php' ?>
