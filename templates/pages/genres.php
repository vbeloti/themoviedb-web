<?php
include_once('./utils/correct-path.php');

include_once(correctPath() . './templates/partials/header.php'); ?>

<div class="content__center">
    <div class="content__center_box">
        <h1 class="content__center_box_title">Gêneros</h1>
        <div class="content__center__movies">

            <div class='content__center__genres'>
                <h2>Filmes</h2>
                <?php
                foreach ($data['genresMovies']->genres as $genre) { ?>
                    <a href="movies/<?= $genre->id ?>">
                        <div class='content__center__genre_details'>
                            <h2><?= $genre->name; ?></h2>
                        </div>
                    </a>
                <?php } ?>
            </div>

            <div class='content__center__genres'>
                <h2>Séries</h2>
                <?php
                foreach ($data['genresSeries']->genres as $genre) { ?>
                    <a href="series/<?= $genre->id ?>">
                        <div class='content__center__genre_details'>
                            <h2><?= $genre->name; ?></h2>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="content__right">
    <h2 class="content__right_title">Séries</h2>
    <?php foreach (array_slice($data['series'], 0, 5) as $serie) { ?>

        <div class='content__right_item'>
            <a href='<?= correctPath(); ?>serie/<?= $serie->id; ?>'>
                <img src='https://image.tmdb.org/t/p/original<?= $serie->image; ?>' alt='<?= $serie->title; ?>'>
            </a>
            <h2><?= $serie->title; ?></h2>
            <p><?= $serie->description; ?></p>
        </div>

    <?php
    } ?>
</div>

<?php include_once(correctPath() . './templates/partials/footer.php'); ?>
