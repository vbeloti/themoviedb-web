<?php

function view(string $view, $data = [])
{
    require_once('templates/pages/' . $view . '.php');
}
