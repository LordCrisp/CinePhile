<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#212121">
    <title>CinePhile</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="assets/styles/css/master.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <!-- Header start -->
    <header class="header__main">
        <a class="header__logo" href="index.php"><img src="assets/app/logo.svg"></a>
    </header>
    <!-- Header end -->

    <!-- Movie banner start (Desktop only) -->
    <section class="movie__section--banner">
        <div class="section__wrapper row">
            <!-- Movie poster start -->
            <div class="movie__poster">
                <figure>
                    <picture>
                        <source srcset="assets/posters/small.jpeg" media="(min-width: 0px"> <!-- Small -->
                        <source srcset="assets/posters/large.jpeg" media="(min-width: 960px"> <!-- Large -->
                        <img src="assets/posters/small.jpeg" alt="movie_name"> <!-- Default to small -->
                    </picture>
                </figure>
            </div>
            <!-- Movie poster end -->
            <!-- Movie main info start -->
            <div class="movie__info">
                <ul class="info__list">
                    <li><h1>Movie Title</h1></li>
                    <li><small>Year</small></li>
                    <li>User Rating</li>
                    <li><p>Runtime</p></li>
                    <li><p>Content Rating</p></li>
                    <li>
                        <article class="movie__summary">
                            <p>plot</p>
                        </article>
                    </li>
                </ul>
                <div class="movie__info--split">
                    <div class="movie__info--list-container">
                        <ul class="movie__info--list">
                            <li>
                                <p>Director</p>
                                <p>name</p>
                            </li>
                        </ul>
                        <ul class="movie__info--list">
                            <li>
                                <p>Writer</p>
                                <p>name</p>
                            </li>
                        </ul>
                    </div>
                    <div class="movie__info--list-container">
                        <ul class="movie__info--list">
                            <li>Top cast</li>
                            <li>Name</li>
                            <li>Name</li>
                            <li>Name</li>
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
                        <button id="play-pause-button" class="play material-icons" title="play" onclick="togglePlayPause();">play_arrow</button>
                        <!-- Toggle fullscreen -->
                        <button id="toggle-fullscreen" class="fullscreen-no material-icons" onclick="toggleFullscreen()">fullscreen</button>
                        <!-- Progress bar -->
                        <progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
                        <!-- Volume up/down -->
                        <button id='volume-inc-button' class='volume-plus' title='increase volume' onclick='changeVolume("+");'>Increase volume</button>
                        <button id='volume-dec-button' class='volume-minus' title='decrease volume' onclick='changeVolume("-");'>Decrease volume</button>
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
                            <li>Name</li>
                            <li>Name</li>
                            <li>Name</li>
                        </ul>
                    </li>
                    <li>
                        <p>Screenwriter</p>
                        <ul class="movie__info--sublist">
                            <li>Name</li>
                            <li>Name</li>
                            <li>Name</li>
                        </ul>
                    </li>
                    <li>
                        <p>Actors</p>
                        <ul class="movie__info--sublist">
                            <li>Name</li>
                            <li>Name</li>
                            <li>Name</li>
                        </ul>
                    </li>
                    <li>
                        <p>Country</p>
                        <p>country</p>
                    </li>
                    <li>
                        <p>Language</p>
                        <p>language</p>
                    </li>
                </ul>
            </div>
            <!-- Movie secondary info end -->
        </div>
    </section>
    <!-- Movie banner end -->

    <!-- Movie list start -->
    <section class="movie__section">
        <h1 class="section__title">title</h1>
        <ul class="movie__list">
            <li class="movie__item">
                <figure>
                    <picture>
                        <source srcset="assets/posters/small.jpeg" media="(min-width: 0px"> <!-- Small -->
                        <source srcset="assets/posters/large.jpeg" media="(min-width: 960px"> <!-- Large -->
                        <img src="assets/posters/small.jpeg" alt="movie_name"> <!-- Default to small -->
                    </picture>
                </figure>
                <h2 class="movie_title">movie title</h2>
            </li>
        </ul>
    </section>
    <!-- Movie list end -->

</body>
</html>