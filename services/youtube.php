
<?php
include_once('./services/api.php');

function youtube($query)
{
    $querySeach = 'trailer%20' . str_replace(' ', '%20', $query);
    $youtubeMovie = api('youtube', null, $querySeach);

    if ($youtubeMovie) {
        $youtubeId = $youtubeMovie->items[0]->id->videoId;
        return $youtubeId;
    }
}
