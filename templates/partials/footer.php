<?php include_once('./utils/correct-path.php'); ?>

</main>
<footer class="footer__box">
    <div class="footer__map">
        <h3>Mapa do site</h3>

        <p><a href="<?= BASE_PATH . '/all/series' ?>">Séries</a></p>
        <p><a href="<?= BASE_PATH . '/all/movies' ?>">Filmes</a></p>
        <p><a href="<?= BASE_PATH . '/genres' ?>">Gêneros</a></p>
    </div>

    <div class="footer__api">
        <h3>Api Usada</h3>
        <p>https://www.themoviedb.org/</p>
        <img src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_short-8e7b30f73a4020692ccca9c88bafe5dcb6f8a62a4c6bc55cd9ba82bb2cd95f6c.svg" alt="">
    </div>

    <div class="footer__dev">
        <h3>Desenvolvimento</h3>
        <p>Vinicius Beloti</p>
        <img src="https://i.imgur.com/6Dook0l.png" alt="">
    </div>
</footer>
<script src='<?= correctPath(); ?>scripts/script.js'></script>
</body>


</html>
