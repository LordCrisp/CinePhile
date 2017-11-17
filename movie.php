<?php
session_start();
$movieSelect = str_replace('submit_',"",$_POST['movie_id']);
$_SESSION['movie_id'] = $movieSelect;
require 'assets/includes/dbInfo.php';
require 'assets/includes/userRating.php';

?>

<div class="movie__banner">
    <figure>
        <picture>
            <source srcset="assets/movies/<?=$infoRow['id']?>/hero.jpg" media="(min-width: 960px)"> <!-- Large -->
            <source srcset="assets/movies/<?=$infoRow['id']?>/poster_small.jpg" media="(min-width: 0px)"> <!-- Small -->
            <img src="assets/movies/<?=$infoRow['id']?>/poster_small.jpg" alt="movie_name" id="movie_banner"> <!-- Default to small -->
        </picture>
    </figure>
</div>
<div class="section__wrapper">
    <div class="banner__buttons">
        <button class="button__watch-direct">Watch now</button>
        <button class="button__toggle-info" id="toggle-info">More Info</button>
    </div>
    <!-- Movie poster start -->
    <div class="movie__poster">
        <figure>
            <picture>
                <source srcset="assets/movies/<?=$infoRow['id']?>/poster.jpg" media="(min-width: 960px)"> <!-- Large -->
                <source srcset="assets/movies/<?=$infoRow['id']?>/poster_small.jpg" media="(min-width: 0px)"> <!-- Small -->
                <img src="assets/movies/<?=$infoRow['id']?>/poster_small.jpg" alt="movie_name"> <!-- Default to small -->
            </picture>
        </figure>
    </div>
    <!-- Movie poster end -->
    <!-- Movie main info start -->
    <ul class="info__list">
        <li><h1><?=$infoRow['title']?></h1></li>
        <li><small><?=$infoRow['year']?></small></li>
        <li><a id="info_userrating" data-toggle="modal" data-target="#exampleModal"><?=$ratingStars?></a></li>
        <!-- User rating modal (start) -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rate movie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/assets/includes/updateRating.php">
                            <button name="ratingSelect" value="1"><i class="material-icons">star_border</i>1</button>
                            <button name="ratingSelect" value="2"><i class="material-icons">star_border</i>2</button>
                            <button name="ratingSelect" value="3"><i class="material-icons">star_border</i>3</button>
                            <button name="ratingSelect" value="4"><i class="material-icons">star_border</i>4</button>
                            <button name="ratingSelect" value="5"><i class="material-icons">star_border</i>5</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- User rating modal (end) -->
        <li><p id="info_runtime"><?=$infoRow['runtime']?></p></li>
        <li><p id="info_contentrating"><?=$infoRow['content_rating']?></p></li>
        <li>
            <ul id="info_genre">
                <?php while ($genreRows = $genreResult -> fetch_array()) : ?>
                    <li class="info__genre"><?=$genreRows['genre']?></li>
                <?php endwhile; ?>
            </ul>
        </li>
        <li id="list_summary">
            <article class="movie__summary">
                <p><?=$infoRow['plot']?></p>
            </article>
        </li>
    </ul>

    <div class="movie__info">
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
                    <li>
                        <p>Top cast</p>
                        <?php while ($actorRow = $actorResult -> fetch_array()) : ?>
                            <p><?=$actorRow['name']?></p>
                        <?php endwhile; ?>
                    </li>
                </ul>
            </div>
        </div>
        <a class="button__watch" href="#"">watch now</a>
    </div>
    <!-- Movie main info end -->
    <!-- Movie trailer start -->
    <div class="movie__trailer">
        <div class="player__main">
            <video id="player_video" controls>
                <source src="assets/movies/<?=$infoRow['id']?>/trailer.mp4">
            </video>
            <div class="player__controls" id="controls" style="display: none;">
                <!-- Play / pause -->
                <button id="controls_play-pause" onclick="togglePlayPause();"><i class="material-icons">play_arrow</i></button>
                <!-- Audio control -->
                <div class="controls__wrapper">
                    <button id="controls_mute" onclick="toggleMute()"><i class="material-icons">volume_up</i></button>
                    <input type="range" id="controls_volume" min="0" max="100" step="1" oninput="setVolume(this.value)" onchange="setVolume(this.value)">
                </div>
                <!-- Progress bar -->
                <progress id="controls_progress" min="0" max="100" value="0">% played</progress>
                <!-- Toggle fullscreen -->
                <button id="controls_fullscreen" onclick="toggleFullscreen(document.getElementById('player_video'));"><i class="material-icons">fullscreen</i></button>
            </div>
        </div>
    </div>
    <!-- Movie trailer end -->
    <!-- Movie secondary info start -->
    <div class="movie__info--secondary">
        <h2>more info</h2>
        <ul class="movie__info--list">
            <li>
                <h3>Producer</h3>
                <ul class="movie__info--sublist">
                    <?php while ($producerRow = $producerResult -> fetch_assoc()) : ?>
                        <li><?=$producerRow['name']?></li>
                    <?php endwhile; ?>
                </ul>
            </li>
            <li>
                <h3>Screenwriter</h3>
                <ul class="movie__info--sublist">
                    <?php while ($screenwriterRow = $screenwriterResult -> fetch_assoc()) : ?>
                        <li><?=$screenwriterRow['name']?></li>
                    <?php endwhile; ?>
                </ul>
            </li>
            <li>
                <h3>Actors</h3>
                <ul class="movie__info--sublist">
                    <?php while ($actorMoreRows = $actorMoreResult -> fetch_array()) : ?>
                        <li><?=$actorMoreRows['name']?></li>
                    <?php endwhile; ?>
                </ul>
            </li>
            <li>
                <h3>Country</h3>
                <p><?=$infoRow['country']?></p>
            </li>
            <li>
                <h3>Language</h3>
                <p><?=$infoRow['language']?></p>
            </li>
        </ul>
    </div>
    <!-- Movie secondary info end -->
</div>

