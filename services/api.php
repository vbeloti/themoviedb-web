
<?php

function api(String $type = 'movie', String $id = null, String $query = null, String $page = '1')
{

    $base_api = 'https://api.themoviedb.org/3/';
    $apiWithLang = '&api_key=176a892fcea4ee25f41861a8ef5ec049&language=pt-BR';
    $youtubeKey = 'AIzaSyBQLguHZc3oU_Zydc0-Uj7u0ywAmFDwg0c';

    switch ($type) {
        case 'tv':
            $url = "{$base_api}tv/popular?{$apiWithLang}";
            break;

        case 'movie':
            $url = "{$base_api}movie/popular?{$apiWithLang}&page={$page}";
            break;

        case 'movies':
            $url = "{$base_api}discover/movie?{$apiWithLang}&with_genres=${id}";
            break;

        case 'search':
            $url = "{$base_api}search/multi?{$apiWithLang}&query={$query}&page=1&include_adult=false";
            break;

        case 'genreMovie':
            $url = "{$base_api}genre/movie/list?{$apiWithLang}";
            break;

        case 'genreSerie':
            $url = "{$base_api}genre/tv/list?{$apiWithLang}";
            break;

        case 'singleMovie':
            $url = "{$base_api}movie/{$id}?{$apiWithLang}";
            break;

        case 'singleSerie':
            $url = "{$base_api}tv/{$id}?{$apiWithLang}";
            break;

        case 'youtube':
            $url = "https://www.googleapis.com/youtube/v3/search?q={$query}&key={}";
            break;
        case 'trendingMovies':
            $url = "{$base_api}trending/movie/week?{$apiWithLang}&page={$page}";
            break;
        case 'trendingSeries':
            $url = "{$base_api}trending/tv/week?{$apiWithLang}&page={$page}";
            break;

        default:
            break;
    }

    $contents = @file_get_contents($url);

    if ($contents) {
        if ($type == 'youtube' || $type == 'singleMovie' || $type == 'singleSerie' || $type == 'genreMovie' || $type == 'genreSerie') $data = json_decode($contents);
        else $data = json_decode($contents)->results;

        return $data;
    }
}
