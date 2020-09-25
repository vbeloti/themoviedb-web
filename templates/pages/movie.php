<?php
include_once('./utils/correct-path.php');

include_once('./templates/partials/header.php'); ?>

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
        <div class="content__center__productions">
            <h2>Produtoras</h2>
            <div class="content__center__productions_box">
                <?php foreach ($data['movie']->production_companies as $production) { ?>
                    <div class="content__center__production_item">
                        <h2><?= $production->name ?? ''; ?></h2>
                        <img src="<?= isset($production->logo_path)  ? "https://image.tmdb.org/t/p/original{$production->logo_path}" : 'https://www.cowgirlcontractcleaning.com/wp-content/uploads/sites/360/2018/05/placeholder-img-4.jpg'; ?>" alt="">
                    </div>
                <?php } ?>
            </div>

        </div>
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
