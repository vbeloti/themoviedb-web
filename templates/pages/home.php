<?php
include_once('./utils/correct-path.php');
?>

<?php include_once('./templates/partials/header.php'); ?>

<div class="content__center">
    <div class="content__center__banner">
        <div class='content__center__banner_item' style='background-image: url(https://image.tmdb.org/t/p/original<?= $data['movie']->image; ?>);'>
            <div class='content__center__banner_details'>
                <h2><?= $data['movie']->title; ?></h2>
                <p><?= $data['movie']->description; ?></p>
            </div>
        </div>
    </div>

    <div class="content__center_box">
        <h1 class="content__center_box_title">Em Alta</h1>
        <div class="content__center__movies">

            <?php foreach ($data['trending'] as $movie) { ?>
                <div class='content__center__movie'>
                    <a href='<?= correctPath(); ?>movie/<?= $movie->id ?>'>
                        <img src='https://image.tmdb.org/t/p/w500<?= $movie->image ?>' alt='<?= $movie->title ?>'>
                    </a>
                    <h2><?= $movie->title ?></h2>
                </div>

            <?php
            } ?>
        </div>
    </div>

    <div class="content__center__nextPrevious">
        <a <?= empty($data['previous']) ? "class='disabled'" : ''; ?> href="<?= correctPath(); ?><?= !empty($data['previous']) ? 'page/' . $data['previous'] : ''; ?>">
            << Anterior</a> <a href="<?= correctPath(); ?><?= !empty($data['next']) ? 'page/' . $data['next'] : ''; ?>">Proximo >>
        </a>
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

<?php include_once('./templates/partials/footer.php'); ?>
