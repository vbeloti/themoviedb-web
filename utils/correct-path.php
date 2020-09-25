<?php

function correctPath()
{
    $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
    $url = array_filter(explode('/', $url));

    $movieExists = in_array('movie', $url);
    $moviesExists = in_array('movies', $url);
    $pageExists = in_array('page', $url);
    $serieExists = in_array('serie', $url);
    $seriesExists = in_array('series', $url);
    $allExists = in_array('all', $url);

    if ($movieExists || $serieExists || $pageExists || $moviesExists || $allExists || $seriesExists) return '../';
}
