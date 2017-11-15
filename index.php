<?php
require 'assets/includes/header.php';
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
            <figure>
                <picture>
                    <source srcset="assets/movies/<?=$listRow['id']?>/poster.jpg" media="(min-width: 960px)"> <!-- Large -->
                    <source srcset="assets/movies/<?=$listRow['id']?>/poster_small.jpg" media="(min-width: 0px)"> <!-- Small -->
                    <img src="assets/movies/<?=$listRow['id']?>/poster_small.jpg" alt="<?=str_replace(' ', '-', $listRow['title'])?>-poster"> <!-- Default to small -->
                </picture>
            </figure>
            <h2 class="movie__title"><?=$listRow['title']?></h2>
            </li>
        <?php endwhile; ?>
    </ul>
</section>
<!-- Movie list end -->

<?php require 'assets/includes/footer.php' ?>

</body>
</html>