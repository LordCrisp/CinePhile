<?php

/* -- User rating calculation (Start) -- */
                $ratingAddup = 0;
                $ratingCounter = 0;
                $userRating = null;

                while ($userRatingRow = $userRatingResult -> fetch_assoc()) {
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
        $ratingStars = '<i class="material-icons">star_half</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 1.2):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 1.7):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 2.2):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 2.7):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 3.2):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 3.7):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 4.2):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>';
        break;

    case ($userRating <= 4.7):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_half</i>';
        break;

    case ($userRating <= 5):
        $ratingStars = '<i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>';
        break;
     
     default:
         $ratingStars = "Not Yet Rated";
         break;

}
/* -- User rating stars manufacturing (End) -- */
