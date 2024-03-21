<?php
function dd($value)
{
    echo '<pre>';

    var_dump($value);
    // VarDumper::dump($value);

    echo '</pre>';
    die();
}

function isInUrl($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path. '.php');
}
