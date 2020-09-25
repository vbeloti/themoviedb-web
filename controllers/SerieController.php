<?php
include_once('./services/api.php');
include_once('./services/youtube.php');
include_once('./core/view.php');
include_once('./utils/normalize.php');


function SerieController($parameter)
{
    if (!$parameter) {
        return header('Location: ' . BASE_PATH);
    }

    $serie = normalize(api('singleSerie', $parameter));
    $series = normalize(api('tv'));
    $similars = normalize(api('similar', $parameter));

    if (empty($serie) || empty($series)) {
        return header('Location: ' . BASE_PATH);
    }

    $youtubeId = youtube($serie->title) ?? '';

    view('serie', ['serie' => $serie, 'series' => $series, 'id' => $youtubeId, 'similars' => $similars]);
}
