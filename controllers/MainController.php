<?php

function MainController()
{

    $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';

    $url = array_filter(explode('/', $url));

    $controller = ucfirst($url[0]) . 'Controller';

    $file =  'controllers/' . $controller . '.php';

    if (is_file($file)) {
        require_once($file);
        isset($url[1]) ? $controller($url[1]) : $controller(null);
    } else if (in_array('page', $url)) {
        require_once('controllers/HomeController.php');
        isset($url[1]) ? HomeController($url[1]) : header('Location: ' . BASE_PATH);
    } else {
        include_once('templates/pages/404.php');
    }
}
