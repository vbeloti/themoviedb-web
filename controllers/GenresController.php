<?php
include_once('./services/api.php');
include_once('./services/youtube.php');
include_once('./core/view.php');
include_once('./utils/normalize.php');


function GenresController()
{

    $genresMovies = api('genreMovie');
    $genresSeries = api('genreSerie');
    $series = normalize(api('tv'));

    if (empty($genresMovies) || empty($genresSeries)) {
        return header('Location: ' . BASE_PATH);
    }

    view('genres', ['genresMovies' => $genresMovies, 'genresSeries' => $genresSeries, 'series' => $series]);
}
