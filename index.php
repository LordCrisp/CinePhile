<?php
require 'assets/includes/header.php';

$movieSelect = 1;
$_SESSION['movie_id'] = $movieSelect;

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
        <li class="movie__item">
            <form onsubmit="return false;" method="POST" action="javascript:void(0);">
                <figure>
                    <picture>
                        <source srcset="assets/movies/<?=$listRow['id']?>/poster.jpg" media="(min-width: 960px)"> <!-- Large -->
                        <source srcset="assets/movies/<?=$listRow['id']?>/poster_small.jpg" media="(min-width: 0px)"> <!-- Small -->
                        <img src="assets/movies/<?=$listRow['id']?>/poster_small.jpg" alt="<?=str_replace(' ', '-', $listRow['title'])?>-poster"> <!-- Default to small -->
                    </picture>
                </figure>
                <h2 class="movie__title"><?=$listRow['title']?></h2>
                <button type="submit" id="submit_<?=$listRow['id']?>" onclick="validate(this.id)">submit</button>
            </form>
        </li>
        <?php endwhile; ?>
    </ul>
</section>
<!-- Movie list end -->

<script>
    validate = function(clicked_id) {
        loadDoc(clicked_id);
    }
</script>

<?php require 'assets/includes/footer.php' ?>

</body>
</html>