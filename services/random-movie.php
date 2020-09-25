<?php
include_once('./services/api.php');
include_once('./utils/normalize.php');

function randomMovie() {

    $movies = api();

    if (!$movies) return;

    $aleatoryKey = array_rand($movies);

    return normalize($movies[$aleatoryKey]);
}

