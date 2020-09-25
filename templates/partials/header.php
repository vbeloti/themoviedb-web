<?php
include_once('./utils/correct-path.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies && Séries</title>
    <link rel="stylesheet" href="<?= correctPath(); ?>styles/style.css">
</head>

<body>

    <main class="app">
        <header class="header">
            <div class="box--menu">
                <button type="button" id="menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </button>
            </div>


            <div class="header__input__box">
                <form action="<?= correctPath(); ?>search">
                    <input name="q" class="header__input" type="text">
                    <input type="submit" class="header__submit" value="Buscar">
                </form>

            </div>
        </header>
        <div class="menu__left">
            <a href="<?= BASE_PATH ?>"><img class="menu_leftMovieLogo" src="<?= correctPath(); ?>assets/img/logo.svg" alt=""></a>
            <hr />
            <div class="menu__left__icons">
                <a href="<?= BASE_PATH . '/all/movies' ?>"><img class="menu_leftMovieLogo" src="<?= correctPath(); ?>assets/img/video.svg" alt="FIlmes" title="Filmes"></a>
                <a href="<?= BASE_PATH . '/all/series' ?>"><img class="menu_leftMovieLogo" src="<?= correctPath(); ?>assets/img/serie.svg" alt="Series" title="Séries"></a>
                <a href="<?= BASE_PATH . '/genres' ?>"><img class="menu_leftMovieLogo" src="<?= correctPath(); ?>assets/img/genre.svg" alt="Gêneros" title="Gêneros"></a>

            </div>

        </div>
