<?php
include_once('./core/view.php');
include_once('./services/api.php');
require_once('./utils/normalize.php');


function MoviesController($parameter)
{

    if ($parameter) {
        $trending = normalize(api('movies', $parameter));
    }

    $genresMovies = api('genreMovie');


    $nameGenre = array_values(array_filter($genresMovies->genres, function ($element) use ($parameter) {
        return $element->id == $parameter;
    }));

    $series = normalize(api('tv'));

    if (empty($trending) || empty($series)) {
        return header('Location: ' . BASE_PATH);
    }

    view('movies', ['trending' => $trending, 'series' => $series, 'nameGenre' => $nameGenre]);
}
