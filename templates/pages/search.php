<?php
include_once('./utils/correct-path.php');

include_once('./templates/partials/header.php'); ?>

<div class="search__center">

    <div class="content__center_box">
        <h1 class="content__center_box_title">Resultados da busca <span class="search__text"><?= $data['query'] ?></span></h1>
        <div class="content__center__movies">
            <?php foreach ($data['search'] as $search) { ?>
                <div class='content__center__movie'>
                    <a href='<?= $search->media_type === 'tv' ? 'serie' : 'movie'; ?>/<?= $search->id ?>'>
                        <img src='<?= !empty($search->image) ? 'https://image.tmdb.org/t/p/w500' . $search->image : 'https://i.ibb.co/80mmdTF/image.jpg' ?>' alt='<?= $search->title ?>'>
                    </a>
                    <h2><?= $search->title ?></h2>
                </div>

            <?php
            } ?>
        </div>
    </div>
</div>

<!-- <div class="content__right">

</div> -->

<?php include_once('./templates/partials/footer.php'); ?>
