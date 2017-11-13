<?php require 'header.php'  ?>
<?php
session_start();
  require('dbInfo.php');

if(isset($_POST['email']) and isset($_POST['password'])) {
$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password' ";

$result = mysqli_query($dbConnect, $query) or die(mysqli_error($dbConnect));
$count = mysqli_num_rows($result);

if($count == 1){
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
}

?>
<center>
  <form method="post">
    <input type="text" name="email" placeholder="E-Mail" required>
    <input type="password" name="password" placeholder="Password" required>
    <button class="btn btn-lg btn-primary" type="submit">Login</button>
    <a class="btn btn-lg btn-primary" href="register.php">Register</a>
  </form>
</center>




<?php require 'footer.php' ?>
