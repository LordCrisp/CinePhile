<?php
    require 'assets/includes/header.php';
    //require 'assets/includes/dbInfo.php';
?>

<form method="post" action="assets/includes/updateRating.php">
    <button name="ratingSelect" value="1"><i class="material-icons">star_border</i>1</button>
    <button name="ratingSelect" value="2"><i class="material-icons">star_border</i>2</button>
    <button name="ratingSelect" value="3"><i class="material-icons">star_border</i>3</button>
    <button name="ratingSelect" value="4"><i class="material-icons">star_border</i>4</button>
    <button name="ratingSelect" value="5"><i class="material-icons">star_border</i>5</button>
</form>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Tether script (required fror Bootstrap 4) -->
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<!-- Bootstrap script -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>