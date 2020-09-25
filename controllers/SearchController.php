<?php
include_once('./services/api.php');
include_once('./services/youtube.php');
include_once('./core/view.php');
include_once('./utils/normalize.php');

function SearchController()
{
    $query = $_GET['q'] ?? null;

    if (empty($query)) {
        return header('Location: ' . BASE_PATH);
    }

    $querySearch = str_replace(' ', '%20', strtolower($query));
    $searchs = normalize(api('search', null,  $querySearch) ?? null);

    view('search', ['search' => $searchs, 'query' => $query]);
}
