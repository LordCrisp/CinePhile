<?php
require 'assets/includes/header.php';

$movieSelect = 1;
$_SESSION['movie_id'] = $movieSelect;

require 'assets/includes/dbInfo.php';
?>

<!-- Movie banner start -->
<section class="movie__section--banner" id="movie">
    <div class="movie__banner">
        <figure>
            <picture>
                <img src="https://images.unsplash.com/photo-1468259275383-c4f1b88d5772?auto=format&fit=crop&w=1350&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="movie_name" id="movie_banner"> <!-- Default to small -->
            </picture>
        </figure>
    </div>
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
                <button type="submit" class="button__movie" id="submit_<?=$listRow['id']?>" onclick="validate(this.id)">submit</button>
            </form>
        </li>
        <?php endwhile; ?>
    </ul>
</section>
<!-- Movie list end -->

<script>
    validate = function(clicked_id) {
        loadDoc(clicked_id);
        setTimeout(function() {
           loadPlayerScript();
        }, 1000);
    };
</script>
<script id="player"></script>
<?php require 'assets/includes/footer.php' ?>

</body>
</html>