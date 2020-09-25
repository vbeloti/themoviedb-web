<?php
include_once('./services/api.php');
include_once('./services/youtube.php');
include_once('./core/view.php');
include_once('./utils/normalize.php');


function MovieController($parameter)
{

    if (!$parameter) {
        header('Location: http://localhost/p2');
    }

    $movie = normalize(api('singleMovie', $parameter));
    $series = normalize(api('tv'));
    $similars = normalize(api('similar', $parameter));


    if (empty($movie) || empty($series)) {
        return header('Location: ' . BASE_PATH);
    }

    $youtubeId = youtube($movie->title) ?? '';

    view('movie', ['movie' => $movie, 'series' => $series, 'id' => $youtubeId, 'similars' => $similars]);
}
