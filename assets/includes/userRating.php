<?php

/* -- User rating calculation (Start) -- */
$ratingAddup = 0;
$ratingCounter = 0;
$userRating = null;

while ($userRatingRow = $userRatingResult->fetch_assoc()) {
    $ratingAddup = $ratingAddup + $userRatingRow['rating'];
    $ratingCounter = $ratingCounter + 1;
}

if (!EMPTY($ratingAddup)) {
    $userRating = $ratingAddup / $ratingCounter;
}
/* -- User rating calculation (End) -- */


/* -- User rating stars manufacturing (Start) -- */
switch (true) {

    case ($userRating == null):
        $ratingStars = "Not Yet Rated";
        break;

    case ($userRating <= 0.7):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star_half</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 1.2):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 1.7):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star_half</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 2.2):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 2.7):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star_half</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 3.2):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star_border</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 3.7):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star_half</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 4.2):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_border</i></button>';
        break;

    case ($userRating <= 4.7):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star_half</i></button>';
        break;

    case ($userRating <= 5):
        $ratingStars = '<button name="ratingSelect" value="1"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="2"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="3"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="4"><i class="material-icons">star</i></button>
                        <button name="ratingSelect" value="5"><i class="material-icons">star</i></button>';
        break;

    default:
        $ratingStars = "<p class='notYetRated'>Not Yet Rated</p>
                        <button name=\"ratingSelect\" value=\"1\"><i class=\"material-icons noRating\">star_border</i></button>
                        <button name=\"ratingSelect\" value=\"2\"><i class=\"material-icons noRating\">star_border</i></button>
                        <button name=\"ratingSelect\" value=\"3\"><i class=\"material-icons noRating\">star_border</i></button>
                        <button name=\"ratingSelect\" value=\"4\"><i class=\"material-icons noRating\">star_border</i></button>
                        <button name=\"ratingSelect\" value=\"5\"><i class=\"material-icons noRating\">star_border</i></button>";
        break;

}
/* -- User rating stars manufacturing (End) -- */
