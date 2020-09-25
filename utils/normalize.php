<?php

function normalize($data)
{

    if (!$data) {
        return;
    }

    if (is_array($data)) {

        $content = array_map(function($movie) {
            return (object) [
                'title' => $movie->title ?? $movie->original_name ?? '',
                'description' => $movie->overview ?? '',
                'image' => $movie->backdrop_path ?? $movie->poster_path ?? '',
                'votes' => $movie->vote_average ?? '',
                'id' => $movie->id ?? '',
                'media_type' => $movie->media_type ?? '',
                'production_companies' => $movie->production_companies ?? ''
            ];


        } , $data);

        return $content;
    } else {
        return (object) [
            'title' => $data->title ?? $data->original_name ?? '',
            'description' => $data->overview ?? '',
            'image' => $data->backdrop_path ?? $data->poster_path ?? '',
            'votes' => $data->vote_average ?? '',
            'id' => $data->id ?? '',
            'media_type' => $data->media_type ?? '',
            'production_companies' => $data->production_companies ?? ''
        ];
    }
}
