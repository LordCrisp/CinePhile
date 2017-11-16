<?php
require 'header.php';
require 'dbInfo.php';
?>

<?php

if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$registerQuery = "INSERT INTO `users`(`id`, `email`, `password`, `name`) VALUES (NULL,'$email','$password','$name')";
$registerResult = mysqli_query($dbConnect, $registerQuery);

header('Location: login.php');
}


?>
<center>
  <form class="login_form" method="post">
    <input type="text" name="name" placeholder="Full Name" required>
    <br>
    <input type="text" name="email" placeholder="E-Mail" required>
    <br>
    <input type="password" name="password" placeholder="Password" required>
    <br />
    <button class="login_btn btn" type="submit">Submit</button>
  </form>
</center>




<?php require 'footer.php'; ?>
