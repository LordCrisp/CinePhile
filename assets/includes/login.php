<?php require 'dbInfo.php' ?>
<?php require 'header.php'  ?>

<form method="post">
  <input type="text" name="email" placeholder="E-Mail" required>
  <input type="password" name="password" placeholder="Password" required>
  <button class="btn btn-lg btn-primary" type="submit">Login</button>
  <a class="btn btn-lg btn-primary" href="register.php">Register</a>
</form>

<<?php
session_start();
  require('dbInfo.php');

if(isset($_POST['email']) and isset($_POST['password'])) {
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";

$result = mysqli_query($dbConnect, $query) or die(mysqli_error($dbConnect))



}






 ?>



<?php require 'footer.php' ?>
</body>
</html>
