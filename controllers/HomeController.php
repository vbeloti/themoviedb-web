<?php
include_once('./core/view.php');
include_once('./services/random-movie.php');
include_once('./services/api.php');
require_once('./utils/normalize.php');


function HomeController($parameter)
{

    if ($parameter) {
        $trending = normalize(api('movie', null, null, $parameter));
    } else {
        $trending = normalize(api());
    }

    $series = normalize(api('tv'));

    if (empty($trending) || empty($series)) {
        return header('Location: ' . BASE_PATH);
    }

    $movie = randomMovie();

    $page = $parameter ?? 1;
    if ($page > 1) {
        $previous = (int) $page - 1;
    }
    if ($page < 1000) {
        $next = (int) $page + 1;
    }

    view('home', ['movie' =>  $movie,'trending' => $trending, 'series' => $series, 'previous' => $previous ?? null, 'next' => $next ?? null]);
}
