<?php
require 'assets/includes/header.php';
require 'assets/includes/dbInfo.php';

/*$query = "SELECT * FROM movie";
$result = $dbConnect ->query($query);*/
?>

<!-- Movie banner start (Desktop only) -->
<?php
/*$infoQuery = "SELECT * FROM movie WHERE id = 1";
$infoResult = $dbConnect -> query($infoQuery);
$infoRow = $infoResult->fetch_assoc();*/
?>
<section class="movie__section--banner">
    <div class="section__wrapper row">
        <!-- Movie poster start -->
        <div class="movie__poster">
            <figure>
                <picture>
                    <source srcset="assets/movies/<?=$infoRow['id']?>/poster_small.jpg" media="(min-width: 0px"> <!-- Small -->
                    <source srcset="assets/movies/<?=$infoRow['id']?>/poster.jpg" media="(min-width: 960px"> <!-- Large -->
                    <img src="assets/movies/<?=$infoRow['id']?>/poster_small.jpg" alt="movie_name"> <!-- Default to small -->
                </picture>
            </figure>
        </div>
        <!-- Movie poster end -->
        <!-- Movie main info start -->

        <div class="movie__info">
            <ul class="info__list">
                <li><h1><?=$infoRow['title']?></h1></li>
                <li>
                    <small><?=$infoRow['year']?></small>
                </li>
                <li>User Rating</li>
                <li><p><?=$infoRow['runtime']?></p></li>
                <li><p><?=$infoRow['content_rating']?></p></li>
                <li>
                    <article class="movie__summary">
                        <p><?=$infoRow['plot']?></p>
                    </article>
                </li>
            </ul>
            <div class="movie__info--split">
                <div class="movie__info--list-container">
                    <ul class="movie__info--list">
                        <li>
                            <p>Director</p>
                            <p><?=$directorRow['name']?></p>
                        </li>
                    </ul>
                    <ul class="movie__info--list">
                        <li>
                            <p>Writer</p>
                            <p><?=$writerRow['name']?></p>
                        </li>
                    </ul>
                </div>
                <div class="movie__info--list-container">
                    <ul class="movie__info--list">
                        <li>Top cast</li>
                        <?php while ($actorRow = $actorResult -> fetch_assoc()) : ?>
                        <li><?=$actorRow['name']?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <a class="button__watch" href="#">watch now</a>
        </div>
        <!-- Movie main info end -->
        <!-- Movie trailer start -->
        <div class="movie__trailer">
            <video id="media-video" controls>
                <source src="assets/movies/movie.mp4" type="video/mp4">
            </video>
            <div class="media__controls--wrapper">
                <div id="media-controls" class="fullscreen-no">
                    <button id="play-pause-button" class="play material-icons" title="play"
                            onclick="togglePlayPause();">play_arrow
                    </button>
                    <!-- Toggle fullscreen -->
                    <button id="toggle-fullscreen" class="fullscreen-no material-icons" onclick="toggleFullscreen()">
                        fullscreen
                    </button>
                    <!-- Progress bar -->
                    <progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
                    <!-- Volume up/down -->
                    <button id='volume-inc-button' class='volume-plus' title='increase volume'
                            onclick='changeVolume("+");'>Increase volume
                    </button>
                    <button id='volume-dec-button' class='volume-minus' title='decrease volume'
                            onclick='changeVolume("-");'>Decrease volume
                    </button>
                </div>
            </div>
        </div>
        <!-- Movie trailer end -->
        <!-- Movie secondary info start -->
        <div class="movie__info--secondary">
            <h2>more info</h2>
            <ul class="movie__info--list">
                <li>
                    <p>Producer</p>
                    <ul class="movie__info--sublist">
                        <?php while ($producerRow = $producerResult -> fetch_assoc()) : ?>
                            <li><?=$producerRow['name']?></li>
                        <?php endwhile; ?>
                    </ul>
                </li>
                <li>
                    <p>Screenwriter</p>
                    <ul class="movie__info--sublist">
                        <?php while ($screenwriterRow = $screenwriterResult -> fetch_assoc()) : ?>
                            <li><?=$screenwriterRow['name']?></li>
                        <?php endwhile; ?>
                    </ul>
                </li>
                <li>
                    <p>Actors</p>
                    <ul class="movie__info--sublist">
                        <?php while ($actorMoreRow = $actorMoreResult -> fetch_assoc()) : ?>
                            <li><?=$actorMoreRow['name']?></li>
                        <?php endwhile; ?>
                    </ul>
                </li>
                <li>
                    <p>Country</p>
                    <p><?=$infoRow['country']?></p>
                </li>
                <li>
                    <p>Language</p>
                    <p><?=$infoRow['language']?></p>
                </li>
            </ul>
        </div>
        <!-- Movie secondary info end -->
    </div>
</section>
<!-- Movie banner end -->

<!---------------------------------------------------------------------------------
------------------------------- Movie list start ----------------------------------
---------------------------------------------------------------------------------->
<section class="movie__section">
    <h1 class="section__title">Recommended For You</h1>
    <ul class="movie__list">
        <?php while ($listRow = $listResult -> fetch_assoc()) : ?>
        <li class="movie__item">
            <figure>
                <picture>
                    <source srcset="assets/movies/<?=$listRow['id']?>/poster_small.jpg" media="(min-width: 0px"> <!-- Small -->
                    <source srcset="assets/movies/<?=$listRow['id']?>/poster.jpg" media="(min-width: 960px"> <!-- Large -->
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