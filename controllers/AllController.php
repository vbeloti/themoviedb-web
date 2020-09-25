<?php
include_once('./core/view.php');
include_once('./services/random-movie.php');
include_once('./services/api.php');
require_once('./utils/normalize.php');


function AllController($parameter)
{

    if ($parameter === 'movies') {
        $trending = normalize(api('trendingMovies', null, null));
    } else if ($parameter === 'series') {
        $trending = normalize(api('trendingSeries', null, null));
    } else {
        return header('Location: ' . BASE_PATH);
    }

    $series = normalize(api('tv'));

    if (empty($trending) || empty($series)) {
        return header('Location: ' . BASE_PATH);
    }

    $movie = randomMovie();

    view('all', ['movie' =>  $movie, 'trending' => $trending, 'series' => $series, 'title' => $parameter]);
}
