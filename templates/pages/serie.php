<?php
include_once('./utils/correct-path.php');

include_once('./templates/partials/header.php'); ?>

<div class="content__center">
    <div class="content__center__banner">
        <div class='content__center__banner_item' style='background-image: url(https://image.tmdb.org/t/p/original<?= $data['serie']->image; ?>);'>
            <div class='content__center__banner_details'>
                <h2><?= $data['serie']->title; ?></h2>
                <p><?= $data['serie']->description; ?></p>
            </div>
        </div>
    </div>

    <div class="content__center_box">
        <h1 class="content__center_box_title">Trailer</h1>
        <div class="content__center__movies">
            <div class='content__center__youtube'>
                <div class='content__center__youtube_details'>
                    <iframe class='content__center__youtube_iframe' src='https://www.youtube.com/embed/<?= $data['id']; ?>' frameborder='0'></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content__right">
    <h2 class="content__right_title">Séries</h2>
    <?php foreach (array_slice($data['series'], 0, 2) as $serie) { ?>

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
