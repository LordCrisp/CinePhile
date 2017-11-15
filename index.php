<?php
require 'assets/includes/header.php';

$movieSelect = 1;

if (isset ($_SESSION['movie_id'])) {
    $movieSelect = $_SESSION['movie_id'];
    echo '<script>function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("movie").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "movie.php", true);
        xhttp.send();
    }
    loadDoc()</script>';
    echo '<script src="assets/scripts/player.js"></script>';
}

require 'assets/includes/dbInfo.php';
?>

<!-- Movie banner start -->
<section class="movie__section--banner" id="movie">
</section>
<!-- Movie banner end -->

<!---------------------------------------------------------------------------------
------------------------------- Movie list start ----------------------------------
---------------------------------------------------------------------------------->
<section class="movie__grid--list">
    <h1 class="section__title">Recommended For You</h1>
    <ul class="movie__list">
        <?php while ($listRow = $listResult -> fetch_assoc()) : ?>
        <li class="movie__item" onclick="loadDoc()">
            <form method="POST" action="loadMovie.php">
                <figure>
                    <picture>
                        <source srcset="assets/movies/<?=$listRow['id']?>/poster.jpg" media="(min-width: 960px)"> <!-- Large -->
                        <source srcset="assets/movies/<?=$listRow['id']?>/poster_small.jpg" media="(min-width: 0px)"> <!-- Small -->
                        <img src="assets/movies/<?=$listRow['id']?>/poster_small.jpg" alt="<?=str_replace(' ', '-', $listRow['title'])?>-poster"> <!-- Default to small -->
                    </picture>
                </figure>
                <h2 class="movie__title"><?=$listRow['title']?></h2>
                <input type="hidden" value="<?=$listRow['id']?>" name="movie_id">
                <button type="submit">submit</button>
            </form>
        </li>
        <?php endwhile; ?>
    </ul>
</section>
<!-- Movie list end -->

<?php require 'assets/includes/footer.php' ?>

</body>
</html>